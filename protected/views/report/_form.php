<?php
/* @var $this ReportController */
/* @var $model Report */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'report_name'); ?>
		<?php echo $form->textField($model,'report_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'report_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'query'); ?>
		<?php echo $form->textField($model,'query',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'query'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reportColumn'); ?>
		<?php echo $form->textField($model,'reportColumn',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'reportColumn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reportRow'); ?>
		<?php echo $form->textField($model,'reportRow',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'reportRow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_table_id'); ?>
		<?php echo $form->textField($model,'report_table_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'report_table_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_grid_container_id'); ?>
		<?php echo $form->textField($model,'report_grid_container_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'report_grid_container_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'details'); ?>
		<?php echo $form->textField($model,'details',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'details'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->