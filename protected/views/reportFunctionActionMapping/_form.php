<?php
/* @var $this ReportFunctionActionMappingController */
/* @var $model ReportFunctionActionMapping */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-function-action-mapping-form',
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
		<?php echo $form->textField($model,'application_forms_id'); ?>
		<?php echo $form->error($model,'application_forms_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_id'); ?>
		<?php echo $form->textField($model,'report_id'); ?>
		<?php echo $form->error($model,'report_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'function_library_id'); ?>
		<?php echo $form->textField($model,'function_library_id'); ?>
		<?php echo $form->error($model,'function_library_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_columns'); ?>
		<?php echo $form->textField($model,'report_columns',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'report_columns'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_row'); ?>
		<?php echo $form->textField($model,'report_row',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'report_row'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fetched_function_to_call'); ?>
		<?php echo $form->textArea($model,'fetched_function_to_call',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fetched_function_to_call'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->