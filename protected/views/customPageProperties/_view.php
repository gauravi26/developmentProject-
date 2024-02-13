<?php
/* @var $this CustomPagePropertiesController */
/* @var $data CustomPageProperties */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('application_forms_id')); ?>:</b>
	<?php echo CHtml::encode($data->application_forms_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('element')); ?>:</b>
	<?php echo CHtml::encode($data->element); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('css_properties')); ?>:</b>
	<?php echo CHtml::encode($data->css_properties); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />


</div>