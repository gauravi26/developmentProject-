<?php
/* @var $this FunctionLibraryController */
/* @var $data FunctionLibrary */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_display_name')); ?>:</b>
	<?php echo CHtml::encode($data->function_display_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_name')); ?>:</b>
	<?php echo CHtml::encode($data->function_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_description')); ?>:</b>
	<?php echo CHtml::encode($data->function_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('syntax')); ?>:</b>
	<?php echo CHtml::encode($data->syntax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('class_name')); ?>:</b>
	<?php echo CHtml::encode($data->class_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parameter_description')); ?>:</b>
	<?php echo CHtml::encode($data->parameter_description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('return_type')); ?>:</b>
	<?php echo CHtml::encode($data->return_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_type')); ?>:</b>
	<?php echo CHtml::encode($data->function_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('button_function')); ?>:</b>
	<?php echo CHtml::encode($data->button_function); ?>
	<br />

	*/ ?>

</div>