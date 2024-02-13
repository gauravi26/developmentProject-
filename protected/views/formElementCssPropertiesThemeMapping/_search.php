<?php
/* @var $this FormElementCssPropertiesThemeMappingController */
/* @var $model FormElementCssPropertiesThemeMapping */
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
		<?php echo $form->label($model,'theme_ID'); ?>
		<?php echo $form->textField($model,'theme_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'form_element_css_properties_id'); ?>
		<?php echo $form->textField($model,'form_element_css_properties_id'); ?>
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