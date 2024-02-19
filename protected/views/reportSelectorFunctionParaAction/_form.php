<?php
/* @var $this ReportSelectorFunctionParaActionController */
/* @var $model ReportSelectorFunctionParaAction */
/* @var $form CActiveForm */

 $report = Report::model()->findAll(array('order' => 'report_name'));
 $reportList = CHtml::listData($report, 'id', 'report_name');
 
 $scriptCodes = FunctionLibrary::model()->findAll(array('order' => 'function_display_name'));
$scriptCodeList = CHtml::listData($scriptCodes, 'id', 'function_display_name');

$sctions = ActionLibrary::model()->findAll(array('order'=>'action_display_name'));
$actionsList = Chtml::listData($sctions, 'id','action_display_name' );


?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-selector-function-para-action-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
    
           
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'report_id'); ?>
            <?php echo $form->dropDownList($model, 'report_id', $reportList, array('prompt' => 'Select Report', 'id' => 'reportIdDropbox')); ?>
		<?php echo $form->error($model,'report_id'); ?>
	</div>

	<div class="row" style="color: white ;display: none;">
		<?php echo $form->labelEx($model,'report_column'); ?>
                <?php echo "Columns of Report Selected. Remove the column for which script is NOT required" ?>
		<?php echo $form->textField($model,'report_column',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'report_column'); ?>
	</div>
                
                <!-- Add this container in  view file -->
                <div id="columnScriptFields">
                </div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'report_row'); ?>
		<?php echo $form->textField($model,'report_row'); ?>
		<?php echo $form->error($model,'report_row'); ?>
	</div>-->

<div class="row" style="color: white ;display: none;">
            <?php echo $form->labelEx($model, 'function_library_id'); ?>
            <?php echo $form->dropDownList($model, 'function_library_id', $scriptCodeList, array('prompt' => 'Select Function', 'id' => 'fieldIdDropdown')); ?>
            <?php echo $form->error($model, 'function_library_id'); ?>
        </div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'function_library_parameter'); ?>
		<?php echo $form->textField($model,'function_library_parameter',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'function_library_parameter'); ?>
	</div>-->

	<div class="row" style="color: white ;display: none;">
		<?php echo $form->labelEx($model,'action_id'); ?>
            <?php echo $form->dropDownList($model, 'action_id', $actionsList, array('prompt' => 'Select Action', 'id' => 'actionIdDropdown')); ?>
		<?php echo $form->error($model,'action_id'); ?>
	</div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'script_to_call'); ?>
		<?php echo $form->textField($model,'script_to_call',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'script_to_call'); ?>
	</div>-->

	
<!--	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>-->
<div class="row buttons">
    <button id="createButton">Create</button>

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/ReportSelectorFunctionParaAction_FormScripts.js"></script>
    
       <script>
   $(document).ready(function() {
    $('#createButton').click(function() {
        // Data to send in the POST request
        var postData = {
            message: 'Hello, server!'
        };
        
        // AJAX POST request
        $.ajax({
            url: 'index.php?r=reportSelectorFunctionParaAction/customCreate', // Replace 'controllerName' with the actual name of your controller
            type: 'POST',
            data: postData,
            success: function(response) {
                console.log("Success:", response);
                // Handle success response here
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
                // Handle error here
            }
        });
    });
});

   
   </script><!--
<!--    <script>
$(document).ready(function() {
    // Function to handle form submission
   $('#createButton').click(function() {
                event.preventDefault(); // Prevent default form submission

        // Fetch column names from the form field
        var reportColumnValue = $("input[name='ReportSelectorFunctionParaAction[report_column]']").val();
        var columnNames = reportColumnValue.split(',').map(function(column) {
            return column.trim();
        });
        
        // Construct POST data
        var postData = constructPostData(columnNames);
        // Stringify the postData object
        var jsonData = JSON.stringify(postData);
//                console.log(jsonData);
 var message = "hi";
        // Submit the form with AJAX
        $.ajax({
            url: 'index.php?r=reportSelectorFunctionParaAction/customCreate', //url 
            type: 'POST',
//            data: jsonData, // Send the JSON string as data
            data: message,
            success: function(responseData) {
                console.log(responseData);
                console.log("Response data received from the server.");
                // Handle success response
            },
            error: function() {
                console.log("Error occurred during the AJAX request.");
                // Handle error
            }
        });
    });

    // Function to construct column-wise POST data
    function constructPostData(columnNames) {
        var postData = {};
        columnNames.forEach(function(columnName) {
            var columnData = constructColumnData(columnName);
            postData[columnName] = columnData;
        });
        return postData;
    }

    function constructColumnData(columnName) {
        // Get the values of the input fields and dropdowns for the current column
        var reportId = $("select[name='ReportSelectorFunctionParaAction[report_id]']").val();
        var reportRowInput = $("input[name='ReportSelectorFunctionParaAction[report_row][" + columnName + "]']");
        var reportRow = reportRowInput.length ? reportRowInput.val().trim() : '';
        var functionLibraryId = $("select[name='ReportSelectorFunctionParaAction[function_library_id][" + columnName + "]']").val();
        var actionId = $("select[name='ReportSelectorFunctionParaAction[action_id][" + columnName + "]']").val();
        var functionArgumentIdInput = $("input[name='function_argument_id_" + functionLibraryId + "']");
        var functionArgumentId = functionArgumentIdInput.length ? functionArgumentIdInput.val().trim() : '';
        var actionArgumentIdInput = $("input[name^='action_argument_id_']");
        var actionArgumentId = actionArgumentIdInput.length ? actionArgumentIdInput.val().trim() : '';

        // Construct an object for the current column
        var columnData = {
            report_id: reportId,
            report_column: columnName,
            report_row: reportRow,
            function_library_id: functionLibraryId,
            function_argument_id: functionArgumentId,
            action_id: actionId,
            action_argument_id: actionArgumentId
        };

        return columnData;
    }
});
</script>-->
