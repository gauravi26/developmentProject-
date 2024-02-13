<?php
/* @var $this ThemeTextCssPropertiesValueController */
/* @var $data ThemeTextCssPropertiesValue */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theme_id')); ?>:</b>
	<?php echo CHtml::encode($data->theme_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->text_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_CSS_Property')); ?>:</b>
	<?php echo CHtml::encode($data->text_CSS_Property); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />


</div>