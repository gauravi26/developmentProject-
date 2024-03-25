<?php
/* @var $this ReportSelectorFunctionParaActionController */
/* @var $model ReportSelectorFunctionParaAction */
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
		<?php echo $form->label($model,'report_id'); ?>
		<?php echo $form->textField($model,'report_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'report_column'); ?>
		<?php echo $form->textField($model,'report_column',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'report_row'); ?>
		<?php echo $form->textField($model,'report_row'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_library_id'); ?>
		<?php echo $form->textField($model,'function_library_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'function_library_parameter'); ?>
		<?php echo $form->textField($model,'function_library_parameter',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'action_id'); ?>
		<?php echo $form->textField($model,'action_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'script_to_call'); ?>
		<?php echo $form->textField($model,'script_to_call',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->