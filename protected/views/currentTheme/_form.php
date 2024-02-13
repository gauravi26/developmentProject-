<style>
    
/*:link { color: #53c544 } */
</style>
<?php

/* @var $this CurrentThemeController */
/* @var $model CurrentTheme */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'current-theme-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	 <div class="row">
        <?php echo $form->labelEx($model,'theme_ID'); ?>
        <?php echo $form->dropDownList($model,'theme_ID', CHtml::listData(Themes::model()->findAll(),'ID','theme_name'), array('prompt' => 'Select Theme')); ?>
        <?php echo $form->error($model,'theme_ID'); ?>
    </div>
<a href="default.asp" target="_blank">This is a link</a>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->