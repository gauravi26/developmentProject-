<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerID'); ?>
		<?php echo $form->textField($model,'CustomerID'); ?>
		<?php echo $form->error($model,'CustomerID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'LastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PhoneNumber'); ?>
		<?php echo $form->textField($model,'PhoneNumber',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'PhoneNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegistrationDate'); ?>
		<?php echo $form->textField($model,'RegistrationDate'); ?>
		<?php echo $form->error($model,'RegistrationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PremiumMember'); ?>
		<?php echo $form->textField($model,'PremiumMember'); ?>
		<?php echo $form->error($model,'PremiumMember'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Balance'); ?>
		<?php echo $form->textField($model,'Balance',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'Balance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->