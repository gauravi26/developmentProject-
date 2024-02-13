<?php
/* @var $this FormElementController */
/* @var $model FormElement */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-element-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'element_name'); ?>
		<?php echo $form->textField($model,'element_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'element_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'element_type'); ?>
		<?php echo $form->textField($model,'element_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'element_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'input_type'); ?>
		<?php echo $form->textField($model,'input_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'input_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->