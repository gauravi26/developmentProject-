<?php
/* @var $this FacultyCourseTypeController */
/* @var $model FacultyCourseType */

$this->breadcrumbs=array(
	'Faculty Course Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FacultyCourseType', 'url'=>array('index')),
	array('label'=>'Create FacultyCourseType', 'url'=>array('create')),
	array('label'=>'Update FacultyCourseType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FacultyCourseType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FacultyCourseType', 'url'=>array('admin')),
);
?>

<h1>View FacultyCourseType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'faculty_id',
		'course_type_id',
	),
)); ?>
