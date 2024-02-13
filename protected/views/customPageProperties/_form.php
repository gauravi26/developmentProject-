<?php
/* @var $this CustomPagePropertiesController */
/* @var $model CustomPageProperties */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'custom-page-properties-form',
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
		<?php echo $form->labelEx($model,'element'); ?>
		<?php echo $form->textField($model,'element',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'element'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'css_properties'); ?>
		<?php echo $form->textField($model,'css_properties',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'css_properties'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textArea($model,'value',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->