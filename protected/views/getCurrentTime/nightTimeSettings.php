<?php
/* @var $this NightTimeSettingsController */
/* @var $model NightTimeSettings */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
$this->pageTitle = 'Night Time Settings';


$form=$this->beginWidget('CActiveForm', array(
	'id'=>'night-time-settings-nightTimeSettings-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
         <?php   echo $form->errorSummary($model); // Display validation errors if any

            echo $form->labelEx($model, 'nightStart');
            echo $form->textField($model, 'nightStart');
            echo $form->error($model, 'nightStart');

            echo $form->labelEx($model, 'nightEnd');
            echo $form->textField($model, 'nightEnd');
            echo $form->error($model, 'nightEnd');
?>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->