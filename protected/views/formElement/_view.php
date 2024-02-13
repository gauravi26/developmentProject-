<?php
/* @var $this FormElementController */
/* @var $data FormElement */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('element_name')); ?>:</b>
	<?php echo CHtml::encode($data->element_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('element_type')); ?>:</b>
	<?php echo CHtml::encode($data->element_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('input_type')); ?>:</b>
	<?php echo CHtml::encode($data->input_type); ?>
	<br />


</div>