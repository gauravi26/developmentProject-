<style>
    #reportIdDropbox input{
        
        width: 150px;
    }
</style>

<?php

Yii::app()->clientScript->registerCoreScript('jquery');

$application_form = applicationForms::model()->findAll(array('order' => 'menu_form'));
$application_form_List = CHtml::listData($application_form, 'id', 'menu_form');


 $report = Report::model()->findAll(array('order' => 'report_name'));
 $reportList = CHtml::listData($report, 'id', 'report_name');
 
 $scriptCodes = FunctionLibrary::model()->findAll(array('order' => 'function_name'));
$scriptCodeList = CHtml::listData($scriptCodes, 'id', 'function_name');

?>

<div class="form">
<!--    <form id="queryForm" method="post" action="<?php echo Yii::app()->createUrl('reportFunctionMapping/query'); ?>">-->

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-Function-mapping-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'application_forms_id'); ?>
        <?php echo $form->dropDownList($model,'application_forms_id', $application_form_List, array('prompt' => 'Select Page', )); ?>
		<?php echo $form->error($model,'application_forms_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_id'); ?>
            <?php echo $form->dropDownList($model, 'report_id', $reportList, array('prompt' => 'Select Effect', 'id' => 'reportIdDropbox')); ?>
		<?php echo $form->error($model,'report_id'); ?>
	</div>

                <div id="queryResultContainer"></div>

        
        <div class="row">
            <?php echo $form->labelEx($model, 'function_library_id'); ?>
            <?php echo $form->dropDownList($model, 'function_library_id', $scriptCodeList, array('prompt' => 'Select Effect', 'id' => 'fieldIdDropdown')); ?>
            <?php echo $form->error($model, 'function_library_id'); ?>
        </div>

        <div id="scriptDetail">
            <?php
            if (isset($_POST['ReportFunctionMapping']['function_library_id'])) {
                $selectedScriptId = $_POST['ReportFunctionMapping']['function_library_id'];
                $scriptModel = ScriptCode::model()->findByPk($selectedScriptId);
                $detail = $scriptModel ? $scriptModel->Description : 'No description available.';
                echo $detail;
            }
            ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_columns'); ?>
                <?php echo "Columns of Report Selected. Remove the column for which script is NOT required" ?>
		<?php echo $form->textField($model,'report_columns',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'report_columns'); ?>
	</div>
                
                <!-- Add this container in your view file -->
                <div id="columnScriptFields">
                </div>



	<div class="row">
		<?php echo $form->labelEx($model,'report_row'); ?>
                <?php echo "Enter the word or Row with words to apply script on Row and cell " ?>
                <?php echo $form->textField($model,'report_row',array('size'=>60,'maxlength'=>255)); ?>
            <br>
		<?php echo "Please read Detail of script applied to see effect of script for row and cell  " ?>
                    <?php echo $form->error($model,'report_row'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<!--    </form>-->
        <div id="queryResultContainer"></div>


        

</div><!-- form -->

<script>
$(document).ready(function(){
    $('#reportIdDropbox').change(function(){
        var selectedReportId = $(this).val();

        // Perform an AJAX request to fetch details based on the selected report_id
        $.ajax({
            url: 'index.php?r=reportFunctionMapping/query', // Update with the actual URL
            type: 'POST',
            data: {reportId: selectedReportId},
            success: function(response){
                // Clear existing input fields and container content
                $("input[name='ReportFunctionMapping[report_columns]']").val(response);
                $('#columnScriptFields').empty();

                // Split the response by comma to get column names
                var columnNames = response.split(',');

                // Create input fields dynamically for each column and populate with column names
                for (var i = 0; i < columnNames.length; i++) {
                    var columnName = columnNames[i].trim();

                    // Create a div for each pair of (label, dropdown) + (label, text field)
                    var inputFieldContainer = $('<div class="row"></div>');

                    // Create and append label for the text field
                    var label = $('<label for="ReportFunctionMapping_columns_' + columnName + '">' + columnName + '</label>');
                    inputFieldContainer.append(label);

                    // Create and append the text field
                    var textField = $('<input>').attr({
                        type: 'text',
                        id: 'ReportFunctionMapping_columns_' + columnName,
                        name: 'ReportFunctionMapping[columns][' + columnName + ']',
                        value: columnName, // Set the value to the column name
                        size: '60',
                        maxlength: '255',
                        class: 'textField',
                        style: 'display: none;', // Add this line to make the field hidden

                    });
                    inputFieldContainer.append(textField);

                    // Create and append script_id dropdown with unique id and name
                    var sciptIdDropdown = $('<select>').attr({
                        id: 'fieldIdDropdown_' + columnName,
                        name: 'ReportFunctionMapping[function_library_id][' + columnName + ']',
                    }).html($('#fieldIdDropdown').html()); // Copy options from the original dropdown
                    inputFieldContainer.append(sciptIdDropdown);

                    // Append the container to the main container
                    $('#columnScriptFields').append(inputFieldContainer).append('<br>');
                    
                    // Call the second script to attach event listeners to the newly created function dropdown
                    attachFunctionDropdownChangeEvent(columnName); 
                }
            },
            error: function(){
                console.log('Error fetching script details');
            }
        });
    });

    // Function to attach event listener for function dropdown change event
    function attachFunctionDropdownChangeEvent(columnName) {
        $(document).on('change', '#fieldIdDropdown_' + columnName, function() {
            var selectedFunctionId = $(this).val();
            console.log(selectedFunctionId); // Log the selected function ID to check

            // Perform an AJAX request to fetch details based on the selected function_library_id
            $.ajax({
                url: 'index.php?r=reportFunctionMapping/fetchParametersForFunction',
                type: 'POST',
                data: { selectedFunctionId: selectedFunctionId },
                success: function(response) {
                    var data = JSON.parse(response);
                    console.log(data);

                    // Create functionArgumentDiv if it doesn't exist
                    var functionArgumentDiv = $('#functionArgument_' + columnName);
                    if (functionArgumentDiv.length === 0) {
                        functionArgumentDiv = $('<div>').attr('id', 'functionArgument_' + columnName);
                        $('#columnScriptFields').append(functionArgumentDiv).append('<br>');
                    } else {
                        functionArgumentDiv.empty(); // Clear existing content
                    }

                    // Iterate over the key-value pairs and append them to functionArgumentDiv
                    for (var key in data) {
                        if (data.hasOwnProperty(key)) {
                            // Create label element
                            var label = $('<label>').text(data[key]).attr('for', 'parameter_' + key);

                            // Create input element
                            var input = $('<input>').attr({
                                type: 'text',
                                id: 'parameter_' + key,
                                name:'function_argument_id_'+key,
                                placeholder: 'Value for ' + data[key]
                                
                            });

                            // Append label and input to functionArgumentDiv
                            functionArgumentDiv.append(label).append(input);
                        }
                    }
                },
                error: function() {
                    console.log('Error fetching script details');
                }
            });
        });
    }
});
</script>

<!--
<script>
 $(document).ready(function(){
    $('#reportIdDropbox').change(function(){
        var selectedReportId = $(this).val();

        // Perform an AJAX request to fetch details based on the selected report_id
        $.ajax({
            url: 'index.php?r=reportFunctionMapping/query', // Update with the actual URL
            type: 'POST',
            data: {reportId: selectedReportId},
            success: function(response){
                // Clear existing input fields and container content
                $("input[name='ReportFunctionMapping[report_columns]']").val(response);
                $('#columnScriptFields').empty();

                // Split the response by comma to get column names
                var columnNames = response.split(',');

                // Create input fields dynamically for each column and populate with column names
                for (var i = 0; i < columnNames.length; i++) {
                    var columnName = columnNames[i].trim();

                    // Create a div for each pair of (label, dropdown) + (label, text field)
                    var inputFieldContainer = $('<div class="row"></div>');

                    // Create and append label for the text field
                    var label = $('<label for="ReportFunctionMapping_columns_' + columnName + '">' + columnName + '</label>');
                    inputFieldContainer.append(label);

                    // Create and append the text field
                    var textField = $('<input>').attr({
                        type: 'text',
                        id: 'ReportFunctionMapping_columns_' + columnName,
                        name: 'ReportFunctionMapping[columns][' + columnName + ']',
                        value: columnName, // Set the value to the column name
                        size: '60',
                        maxlength: '255',
                        class: 'textField',
                        style: 'display: none;', // Add this line to make the field hidden

                    });
                    inputFieldContainer.append(textField);

                    // Create and append script_id dropdown with unique id and name
                    var sciptIdDropdown = $('<select>').attr({
                        id: 'fieldIdDropdown_' + columnName,
                        name: 'ReportFunctionMapping[function_library_id][' + columnName + ']',
                    }).html($('#fieldIdDropdown').html()); // Copy options from the original dropdown
                    inputFieldContainer.append(sciptIdDropdown);

                    // Append the container to the main container
                    $('#columnScriptFields').append(inputFieldContainer).append('<br>');
                    
                     var functionArgumentDiv = $('<div id="functionArgument">functionArgument</div>');
                        $('#columnScriptFields').append(functionArgumentDiv).append('<br>');
                    
                }
            },
            error: function(){
                console.log('Error fetching script details');
            }
        });
    });
});

</script>
<script>
$(document).on('change', '#columnScriptFields select', function() {
    // Adjusted selector to target all selects under columnScriptFields
    var selectedFunctionId = $(this).val();
    console.log(selectedFunctionId); // Log the selected function ID to check

    // Perform an AJAX request to fetch details based on the selected function_library_id
    $.ajax({
        url: 'index.php?r=reportFunctionMapping/fetchParametersForFunction',
        type: 'POST',
        data: { selectedFunctionId: selectedFunctionId }, // Pass the selectedFunctionId as a separate parameter
     success: function(response) {
    // Clear existing content in functionArgumentDiv
    $('#functionArgument_' + selectedFunctionId).empty();

    // Parse the JSON response
    var data = JSON.parse(response);
    console.log(data);

    // Create functionArgumentDiv if it doesn't exist
    var functionArgumentDiv = $('#functionArgument_' + selectedFunctionId);
    if (functionArgumentDiv.length === 0) {
        functionArgumentDiv = $('<div>').attr('id', 'functionArgument_' + selectedFunctionId);
        $('#columnScriptFields').append(functionArgumentDiv).append('<br>');
    }

    // Iterate over the key-value pairs and append them to functionArgumentDiv
    for (var key in data) {
        if (data.hasOwnProperty(key)) {
            // Create label element
            var label = $('<label>').text(key).attr('for', 'parameter_' + key);

            // Create input element
            var input = $('<input>').attr({
                type: 'text',
                id: 'parameter_' + key,
                name: 'parameter_' + key,
                value: data[key],
                readonly: true
            });

            // Append label and input to functionArgumentDiv
            functionArgumentDiv.append(label).append(input);
        }
    }
},


        error: function() {
            console.log('Error fetching script details');
        }
    });
});
</script>-->

<!--<script>
$(document).ready(function(){
    $('#reportIdDropbox').change(function(){
        var selectedReportId = $(this).val();

        // Perform an AJAX request to fetch details based on the selected report_id
        $.ajax({
            url: 'index.php?r=reportFunctionMapping/query', // Update with the actual URL
            type: 'POST',
            data: {reportId: selectedReportId},
            success: function(response){
                // Clear existing input fields and container content
                $("input[name='ReportFunctionMapping[report_columns]']").val(response);
                $('#columnScriptFields').empty();

                // Split the response by comma to get column names
                var columnNames = response.split(',');

                // Create input fields dynamically for each column and populate with column names
                for (var i = 0; i < columnNames.length; i++) {
                    var columnName = columnNames[i].trim();

                    // Create a div for each pair of (label, dropdown) + (label, text field)
                    var inputFieldContainer = $('<div class="row"></div>');

                    // Create and append label for the text field
                    var label = $('<label for="ReportFunctionMapping_columns_' + columnName + '">' + columnName + '</label>');
                    inputFieldContainer.append(label);

                    // Create and append the text field
                    var textField = $('<input>').attr({
                        type: 'text',
                        id: 'ReportFunctionMapping_columns_' + columnName,
                        name: 'ReportFunctionMapping[columns][' + columnName + ']',
                        value: columnName, // Set the value to the column name
                        size: '60',
                        maxlength: '255',
                        class: 'textField',
                        style: 'display: none;', // Add this line to make the field hidden

                    });
                    inputFieldContainer.append(textField);

                    // Create and append script_id dropdown with unique id and name
                    var sciptIdDropdown = $('<select>').attr({
                        id: 'fieldIdDropdown_' + columnName,
                        name: 'ReportFunctionMapping[function_library_id][' + columnName + ']',
                    }).html($('#fieldIdDropdown').html()); // Copy options from the original dropdown
                    inputFieldContainer.append(sciptIdDropdown);

                    // Append the container to the main container
                    $('#columnScriptFields').append(inputFieldContainer).append('<br>');
                    
                   
                }
            },
            error: function(){
                console.log('Error fetching script details');
            }
        });
    });
});
</script>

<script>
$(document).ready(function(){
    $(document).on('change', '#columnScriptFields select', function() {
        // Adjusted selector to target all selects under columnScriptFields
        var selectedFunctionId = $(this).val();
        console.log(selectedFunctionId); // Log the selected function ID to check

        // Perform an AJAX request to fetch details based on the selected function_library_id
        $.ajax({
            url: 'index.php?r=reportFunctionMapping/fetchParametersForFunction',
            type: 'POST',
            data: { selectedFunctionId: selectedFunctionId }, // Pass the selectedFunctionId as a separate parameter
            success: function(response) {
                // Clear existing content in functionArgumentDiv
                $('[id^=functionArgument_]').empty();

                // Parse the JSON response
                var data = JSON.parse(response);
//                alert(data);

                // Create functionArgumentDiv if it doesn't exist
                var functionArgumentDiv = $('#functionArgument_' + selectedFunctionId);
                if (functionArgumentDiv.length === 0) {
                    functionArgumentDiv = $('<div>').attr('id', 'functionArgument_' + selectedFunctionId);
                    $('#columnScriptFields').append(functionArgumentDiv).append('<br>');
                }
                

                // Iterate over the key-value pairs and append them to functionArgumentDiv
              // Iterate over the key-value pairs and append them to functionArgumentDiv
            for (var key in data) {
                if (data.hasOwnProperty(key)) {
                    // Create label element with data[key] as label text
                    var label = $('<label>').text(data[key]).attr('for', 'parameter_' + key);

                    // Create input element
                   // Create input element
                // Create input element
                var input = $('<input>').attr({
                    type: 'text',
                    id: 'parameter_' + key,
                    name: data[key] + '_' + selectedFunctionId, // Set name to the value of the parameter plus selectedFunctionId
                    placeholder: 'Value for ' + data[key] // Set placeholder to "Value for [parameter]"
                });



                    // Append label and input to functionArgumentDiv
                    functionArgumentDiv.append(label).append(input);
                }
            }

            },
            error: function() {
                console.log('Error fetching script details');
            }
        });
    });
});
</script>

-->

<script>
    $(document).ready(function(){
        $('#fieldIdDropdown').change(function(){
            var selectedScriptId = $(this).val();
            
            // Perform an AJAX request to fetch details based on the selected script_id
            $.ajax({
                url: 'index.php?r=reportFunctionMapping/getScriptDetail', // Update with the actual URL
                type: 'POST',
                data: {scriptId: selectedScriptId},
                success: function(response){
                    // Update the content of the #scriptDetail div with the fetched details
                    $('#scriptDetail').html(response);
                },
                error: function(){
                    console.log('Error fetching script details');
                }
            });
        });
    });
</script>