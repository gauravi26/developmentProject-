<?php
/* @var $this StudentInformationController */
/* @var $model StudentInformation */

$this->breadcrumbs=array(
	'Student Informations'=>array('index'),
	$model->student_id=>array('view','id'=>$model->student_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentInformation', 'url'=>array('index')),
	array('label'=>'Create StudentInformation', 'url'=>array('create')),
	array('label'=>'View StudentInformation', 'url'=>array('view', 'id'=>$model->student_id)),
	array('label'=>'Manage StudentInformation', 'url'=>array('admin')),
);
?>

<h1>Update StudentInformation <?php echo $model->student_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>