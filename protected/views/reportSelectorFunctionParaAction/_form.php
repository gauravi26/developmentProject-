<?php
/* @var $this ReportSelectorFunctionParaActionController */
/* @var $model ReportSelectorFunctionParaAction */
/* @var $form CActiveForm */
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
		<?php echo $form->textField($model,'report_id'); ?>
		<?php echo $form->error($model,'report_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_column'); ?>
		<?php echo $form->textField($model,'report_column',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'report_column'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_row'); ?>
		<?php echo $form->textField($model,'report_row'); ?>
		<?php echo $form->error($model,'report_row'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'function_library_id'); ?>
		<?php echo $form->textField($model,'function_library_id'); ?>
		<?php echo $form->error($model,'function_library_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'function_library_parameter'); ?>
		<?php echo $form->textField($model,'function_library_parameter',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'function_library_parameter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'action_id'); ?>
		<?php echo $form->textField($model,'action_id'); ?>
		<?php echo $form->error($model,'action_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'script_to_call'); ?>
		<?php echo $form->textField($model,'script_to_call',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'script_to_call'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->