<?php
/* @var $this FunctionLibraryController */
/* @var $model FunctionLibrary */
/* @var $form CActiveForm */

$functionTypes = FunctionType::model()->findAll(array('order'=> 'type'));
$functiontionTypeList = CHtml::listData($functionTypes,'id', 'type');


?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'function-library-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'function_display_name'); ?>
		<?php echo $form->textField($model,'function_display_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'function_display_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'function_name'); ?>
		<?php echo $form->textField($model,'function_name',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'function_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'function_description'); ?>
		<?php echo $form->textArea($model,'function_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'function_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'syntax'); ?>
		<?php echo $form->textArea($model,'syntax',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'syntax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'class_name'); ?>
		<?php echo $form->textField($model,'class_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'class_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parameter_description'); ?>
		<?php echo $form->textArea($model,'parameter_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'parameter_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'return_type'); ?>
		<?php echo $form->textField($model,'return_type'); ?>
		<?php echo $form->error($model,'return_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'function_type'); ?>
    <?php echo $form->dropDownList($model, 'function_type', $functiontionTypeList, array('id' => 'field_35', 'empty' => 'Select Theme')); ?>
		<?php echo $form->error($model,'function_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'button_function'); ?>
		<?php echo $form->textField($model,'button_function'); ?>
		<?php echo $form->error($model,'button_function'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->