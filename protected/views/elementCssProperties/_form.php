<?php
/* @var $this ElementCssPropertiesController */
/* @var $model ElementCssProperties */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'element-css-properties-form',
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
		<?php echo $form->labelEx($model,'theme_columns'); ?>
		<?php echo $form->textField($model,'theme_columns',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'theme_columns'); ?>
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