<?php
/* @var $this TableThemeController */
/* @var $model TableTheme */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'table-theme-form',
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
		<?php echo $form->textField($model,'report_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'report_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_element_name'); ?>
		<?php echo $form->textField($model,'report_element_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'report_element_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_element'); ?>
		<?php echo $form->textField($model,'report_element',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'report_element'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'theme_name'); ?>
		<?php echo $form->textField($model,'theme_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'theme_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'css_property'); ?>
		<?php echo $form->textField($model,'css_property',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'css_property'); ?>
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