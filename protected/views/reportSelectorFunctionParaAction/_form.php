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
                
                <!-- Add this container in your view file -->
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/ReportSelectorFunctionParaAction_FormScripts.js"></script>
    <script>
  function collectRowData() {
    var rowsData = [];

    // Iterate over each row
    $('.row').each(function(index, row) {
        var rowData = {};

        // Iterate over each input field in the row
        $(row).find('input').each(function() {
            var fieldName = $(this).attr('name');
            var fieldValue = $(this).val();

            // If the field has a name attribute
            if (fieldName) {
                // Split the name attribute to get the column name and parameter name
                var nameParts = fieldName.split('[');

                // Check if the nameParts array has expected elements
                if (nameParts.length >= 3) {
                    var columnName = nameParts[1].replace(']', '');
                    var parameterName = nameParts[2].replace(']', '');

                    // If the column name is not present in the rowData object, initialize it as an empty object
                    if (!rowData[columnName]) {
                        rowData[columnName] = {};
                    }

                    // Store the parameter value in the rowData object
                    rowData[columnName][parameterName] = fieldValue;
                } else {
                    console.error('Unexpected field name format:', fieldName);
                }
            }
        });

        // Add the row data to the array
        rowsData.push(rowData);
    });

    console.log('Collected row data:', rowsData);
}
 
    // Add an event listener for form submission
$('#report-selector-function-para-action-form').submit(function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();
    
    // Call the function to collect row data
    collectRowData();
    
    // Optionally, you can continue with the form submission here if needed
    // For example, you can uncomment the following line to submit the form
    // $(this).unbind('submit').submit();
});

    </script>