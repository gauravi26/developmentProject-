<?php
/* @var $this NightTimeSettingsController */
/* @var $model NightTimeSettings */
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
		<?php echo $form->label($model,'nightStart'); ?>
		<?php echo $form->textField($model,'nightStart'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nightEnd'); ?>
		<?php echo $form->textField($model,'nightEnd'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->