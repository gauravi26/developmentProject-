<?php
/* @var $this TableThemeController */
/* @var $data TableTheme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_id')); ?>:</b>
	<?php echo CHtml::encode($data->report_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_element_name')); ?>:</b>
	<?php echo CHtml::encode($data->report_element_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_element')); ?>:</b>
	<?php echo CHtml::encode($data->report_element); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theme_name')); ?>:</b>
	<?php echo CHtml::encode($data->theme_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('css_property')); ?>:</b>
	<?php echo CHtml::encode($data->css_property); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />


</div>