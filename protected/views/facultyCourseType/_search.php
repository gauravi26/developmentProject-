<?php
/* @var $this FacultyCourseTypeController */
/* @var $model FacultyCourseType */
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
		<?php echo $form->label($model,'faculty_id'); ?>
		<?php echo $form->textField($model,'faculty_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'course_type_id'); ?>
		<?php echo $form->textField($model,'course_type_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->