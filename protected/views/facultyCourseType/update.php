<?php
/* @var $this FacultyCourseTypeController */
/* @var $model FacultyCourseType */

$this->breadcrumbs=array(
	'Faculty Course Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FacultyCourseType', 'url'=>array('index')),
	array('label'=>'Create FacultyCourseType', 'url'=>array('create')),
	array('label'=>'View FacultyCourseType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FacultyCourseType', 'url'=>array('admin')),
);
?>

<h1>Update FacultyCourseType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>