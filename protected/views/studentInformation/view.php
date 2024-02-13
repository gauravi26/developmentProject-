<?php
/* @var $this StudentInformationController */
/* @var $model StudentInformation */

$this->breadcrumbs=array(
	'Student Informations'=>array('index'),
	$model->student_id,
);

$this->menu=array(
	array('label'=>'List StudentInformation', 'url'=>array('index')),
	array('label'=>'Create StudentInformation', 'url'=>array('create')),
	array('label'=>'Update StudentInformation', 'url'=>array('update', 'id'=>$model->student_id)),
	array('label'=>'Delete StudentInformation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->student_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentInformation', 'url'=>array('admin')),
);
?>

<h1>View StudentInformation #<?php echo $model->student_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'student_id',
		'first_name',
		'last_name',
		'date_of_birth',
		'address',
		'phone_number',
		'email_address',
		'department_id',
		'course_type_id',
		'course_id',
		'major',
		'academic_status',
		'theme_ID',
		'emergency_contact_name',
		'emergency_contact_phone',
		'emergency_contact_relationship',
	),
)); ?>
