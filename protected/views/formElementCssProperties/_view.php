<?php
/* @var $this FormElementCssPropertiesController */
/* @var $data FormElementCssProperties */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('element_id')); ?>:</b>
	<?php echo CHtml::encode($data->element_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_element')); ?>:</b>
	<?php echo CHtml::encode($data->form_element); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('css_property')); ?>:</b>
	<?php echo CHtml::encode($data->css_property); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('css_properties_id')); ?>:</b>
	<?php echo CHtml::encode($data->css_properties_id); ?>
	<br />


</div>