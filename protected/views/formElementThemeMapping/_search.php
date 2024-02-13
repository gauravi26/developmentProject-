<?php
/* @var $this FormElementThemeMappingController */
/* @var $model FormElementThemeMapping */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'application_forms_id'); ?>
		<?php echo $form->textField($model,'application_forms_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'form_element_id'); ?>
		<?php echo $form->textField($model,'form_element_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'theme_ID'); ?>
		<?php echo $form->textField($model,'theme_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->