<?php
/* @var $this DepartmentsController */
/* @var $data Departments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_code')); ?>:</b>
	<?php echo CHtml::encode($data->department_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_name')); ?>:</b>
	<?php echo CHtml::encode($data->department_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_desc')); ?>:</b>
	<?php echo CHtml::encode($data->department_desc); ?>
	<br />


</div>