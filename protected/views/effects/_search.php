<?php
/* @var $this EffectsController */
/* @var $model Effects */
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
		<?php echo $form->label($model,'form_id'); ?>
		<?php echo $form->textField($model,'form_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trigger_id'); ?>
		<?php echo $form->textField($model,'trigger_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FIELD_ID'); ?>
		<?php echo $form->textField($model,'FIELD_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'effect_code_id'); ?>
		<?php echo $form->textField($model,'effect_code_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->