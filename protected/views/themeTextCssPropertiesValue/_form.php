<?php
/* @var $this ThemeTextCssPropertiesValueController */
/* @var $model ThemeTextCssPropertiesValue */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'theme-text-css-properties-value-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'theme_id'); ?>
		<?php echo $form->textField($model,'theme_id'); ?>
		<?php echo $form->error($model,'theme_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_type_id'); ?>
		<?php echo $form->textField($model,'text_type_id'); ?>
		<?php echo $form->error($model,'text_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_CSS_Property'); ?>
		<?php echo $form->textField($model,'text_CSS_Property',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'text_CSS_Property'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->