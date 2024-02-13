<?php
/* @var $this CssPropertiesController */
/* @var $data CssProperties */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_name')); ?>:</b>
	<?php echo CHtml::encode($data->property_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_value')); ?>:</b>
	<?php echo CHtml::encode($data->property_value); ?>
	<br />


</div>