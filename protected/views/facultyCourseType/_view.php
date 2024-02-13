<?php
/* @var $this FacultyCourseTypeController */
/* @var $data FacultyCourseType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faculty_id')); ?>:</b>
	<?php echo CHtml::encode($data->faculty_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->course_type_id); ?>
	<br />


</div>