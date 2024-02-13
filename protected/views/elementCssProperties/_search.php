<?php
/* @var $this ElementCssPropertiesController */
/* @var $model ElementCssProperties */
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
		<?php echo $form->label($model,'element_id'); ?>
		<?php echo $form->textField($model,'element_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'theme_columns'); ?>
		<?php echo $form->textField($model,'theme_columns',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'css_properties_id'); ?>
		<?php echo $form->textField($model,'css_properties_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->