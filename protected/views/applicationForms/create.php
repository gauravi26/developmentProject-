<?php
/* @var $this ApplicationFormsController */
/* @var $model ApplicationForms */

$this->breadcrumbs=array(
	'Application Forms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ApplicationForms', 'url'=>array('index')),
	array('label'=>'Manage ApplicationForms', 'url'=>array('admin')),
);
?>

<h1>Create ApplicationForms</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>