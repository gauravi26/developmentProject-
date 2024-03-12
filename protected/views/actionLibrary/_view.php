<?php
/* @var $this ActionLibraryController */
/* @var $data ActionLibrary */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('action_display_name')); ?>:</b>
	<?php echo CHtml::encode($data->action_display_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('action_name')); ?>:</b>
	<?php echo CHtml::encode($data->action_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('syntax')); ?>:</b>
	<?php echo CHtml::encode($data->syntax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parameter_count')); ?>:</b>
	<?php echo CHtml::encode($data->parameter_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parameter_description')); ?>:</b>
	<?php echo CHtml::encode($data->parameter_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('action_type')); ?>:</b>
	<?php echo CHtml::encode($data->action_type); ?>
	<br />


</div>