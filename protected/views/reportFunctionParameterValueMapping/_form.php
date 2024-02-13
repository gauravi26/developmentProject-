<?php
/* @var $this ReportFunctionParameterValueMappingController */
/* @var $model ReportFunctionParameterValueMapping */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-function-parameter-value-mapping-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'report_function_mapping_id'); ?>
		<?php echo $form->textField($model,'report_function_mapping_id'); ?>
		<?php echo $form->error($model,'report_function_mapping_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'function_argument_map_id'); ?>
		<?php echo $form->textField($model,'function_argument_map_id'); ?>
		<?php echo $form->error($model,'function_argument_map_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->