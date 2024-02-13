<?php
/* @var $this SelectedThemeController */
/* @var $model SelectedTheme */
/* @var $form CActiveForm */
   $themes = Themes::model()->findAll(array('order' => 'theme_name'));
   $themeList = CHtml::listData($themes, 'ID', 'theme_name');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'selected-theme-form',
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
		<?php echo $form->dropDownList($model,'theme_ID', $themeList, array('empty'=>'Select Theme')); ?>
		<?php echo $form->error($model,'theme_ID'); ?>
	</div>
      

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->