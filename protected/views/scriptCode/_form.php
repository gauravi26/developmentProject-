<?php
/* @var $this ScriptCodeController */
/* @var $model ScriptCode */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'script-code-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'effects'); ?>
		<?php echo $form->textField($model,'effects',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'effects'); ?>
	</div>

	<div class="row" id="css">
		<?php echo $form->labelEx($model,'css'); ?>
		<?php echo $form->textArea($model,'css',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'css'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textArea($model,'code',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<script type="text/javascript"> 
//    var opacity=0; var intervalID=0; window.onload=fadeout; function fadeout(){ setInterval(hide, 200); } function hide(){ var body=document.getElementById("css"); opacity = Number(window.getComputedStyle(body).getPropertyValue(opacity)) if(opacity>0){ opacity=opacity-0.1; body.style.opacity=opacity } else{ clearInterval(intervalID); } }
    
</script>
</div><!-- form -->