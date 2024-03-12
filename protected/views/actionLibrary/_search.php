<?php
/* @var $this ActionLibraryController */
/* @var $model ActionLibrary */
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
		<?php echo $form->label($model,'action_display_name'); ?>
		<?php echo $form->textField($model,'action_display_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'action_name'); ?>
		<?php echo $form->textField($model,'action_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syntax'); ?>
		<?php echo $form->textArea($model,'syntax',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parameter_count'); ?>
		<?php echo $form->textField($model,'parameter_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parameter_description'); ?>
		<?php echo $form->textField($model,'parameter_description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'action_type'); ?>
		<?php echo $form->textField($model,'action_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->