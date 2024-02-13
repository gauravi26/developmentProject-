<?php
/* @var $this FacultyController */
/* @var $data Faculty  */
//$department = Departments::model()->findByPk($data->department_id);

// Fetch the course model based on the course_id
//$course = Courses::model()->findByPk($data->course_id);
if (isset($data)) {
    // Fetch the department model based on the department_id
    $department = Departments::model()->findByPk($data->department_id);
    
    // Fetch the course model based on the course_id
    $course = Courses::model()->findByPk($data->course_id);

    // Display the department name and course name
//    echo "<b>" . CHtml::encode($data->getAttributeLabel('department_id')) . ":</b> " . CHtml::encode($department->department_name) . "<br />";
//    echo "<b>" . CHtml::encode($data->getAttributeLabel('course_id')) . ":</b> " . CHtml::encode($course->course_name) . "<br />";
}

?>



<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Faculty_code')); ?>:</b>
	<?php echo CHtml::encode($data->faculty_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel(' Faculty name')); ?>:</b>
	<?php echo CHtml::encode($data->faculty_name); ?>
	<br />

	<b><?php echo "<b>" . CHtml::encode($data->getAttributeLabel('department_id')) . ":</b> " . CHtml::encode($department->department_name) . "<br />";
 ?></b>
	<?php //echo CHtml::encode($data->department_id); ?>
	
        <b><?php echo "<b>" . CHtml::encode($data->getAttributeLabel('course_id')) . ":</b> " . CHtml::encode($course->course_name) . "<br />";
 
 ?></b>
	<?php //echo CHtml::encode($data->course_id); ?>
	
        <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

</div>