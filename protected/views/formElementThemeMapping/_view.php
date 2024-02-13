<?php
/* @var $this FormElementThemeMappingController */
/* @var $data FormElementThemeMapping */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('application_forms_id')); ?>:</b>
	<?php echo CHtml::encode($data->application_forms_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_element_id')); ?>:</b>
	<?php echo CHtml::encode($data->form_element_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theme_ID')); ?>:</b>
	<?php echo CHtml::encode($data->theme_ID); ?>
	<br />


</div>