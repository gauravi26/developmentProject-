<?php
/* @var $this FormElementCssPropertiesController */
/* @var $model FormElementCssProperties */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-element-css-properties-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'element_id'); ?>
		<?php echo $form->textField($model,'element_id'); ?>
		<?php echo $form->error($model,'element_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'form_element'); ?>
		<?php echo $form->textField($model,'form_element',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'form_element'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'css_property'); ?>
		<?php echo $form->textField($model,'css_property',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'css_property'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'css_properties_id'); ?>
		<?php echo $form->textField($model,'css_properties_id'); ?>
		<?php echo $form->error($model,'css_properties_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->