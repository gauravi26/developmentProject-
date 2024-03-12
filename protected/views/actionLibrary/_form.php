<?php
/* @var $this ActionLibraryController */
/* @var $model ActionLibrary */
/* @var $form CActiveForm */

$actionTypes = ActionType::model()->findAll(array('order'=> 'action_type'));
$actionTypeList = CHtml::listData($actionTypes,'id', 'action_type');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'action-library-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'action_display_name'); ?>
		<?php echo $form->textField($model,'action_display_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'action_display_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'action_name'); ?>
		<?php echo $form->textField($model,'action_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'action_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'syntax'); ?>
		<?php echo $form->textArea($model,'syntax',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'syntax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parameter_count'); ?>
		<?php echo $form->textField($model,'parameter_count'); ?>
		<?php echo $form->error($model,'parameter_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parameter_description'); ?>
		<?php echo $form->textField($model,'parameter_description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'parameter_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'action_type'); ?>
    <?php echo $form->dropDownList($model, 'action_type', $actionTypeList, array('id' => 'field_30', 'empty' => 'Select Type')); ?>
		<?php echo $form->error($model,'action_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->