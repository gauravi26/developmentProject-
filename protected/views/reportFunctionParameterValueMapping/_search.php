<?php
/* @var $this ReportFunctionParameterValueMappingController */
/* @var $model ReportFunctionParameterValueMapping */
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
		<?php echo $form->label($model,'report_function_mapping_id'); ?>
		<?php echo $form->textField($model,'report_function_mapping_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_argument_map_id'); ?>
		<?php echo $form->textField($model,'function_argument_map_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'value'); ?>
		<?php echo $form->textField($model,'value',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->