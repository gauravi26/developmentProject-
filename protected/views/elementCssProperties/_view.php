<?php
/* @var $this ElementCssPropertiesController */
/* @var $data ElementCssProperties */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('element_id')); ?>:</b>
	<?php echo CHtml::encode($data->element_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theme_columns')); ?>:</b>
	<?php echo CHtml::encode($data->theme_columns); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('css_properties_id')); ?>:</b>
	<?php echo CHtml::encode($data->css_properties_id); ?>
	<br />


</div>