<?php
/* @var $this FacultyCourseTypeController */
/* @var $model FacultyCourseType */

$this->breadcrumbs=array(
	'Faculty Course Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FacultyCourseType', 'url'=>array('index')),
	array('label'=>'Manage FacultyCourseType', 'url'=>array('admin')),
);
?>

<h1>Create FacultyCourseType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>