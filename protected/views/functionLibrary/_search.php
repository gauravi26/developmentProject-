<?php
/* @var $this FunctionLibraryController */
/* @var $model FunctionLibrary */
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
		<?php echo $form->label($model,'function_display_name'); ?>
		<?php echo $form->textField($model,'function_display_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_name'); ?>
		<?php echo $form->textField($model,'function_name',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_description'); ?>
		<?php echo $form->textArea($model,'function_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syntax'); ?>
		<?php echo $form->textArea($model,'syntax',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'class_name'); ?>
		<?php echo $form->textField($model,'class_name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parameter_description'); ?>
		<?php echo $form->textArea($model,'parameter_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'return_type'); ?>
		<?php echo $form->textField($model,'return_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_type'); ?>
		<?php echo $form->textField($model,'function_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'button_function'); ?>
		<?php echo $form->textField($model,'button_function'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->