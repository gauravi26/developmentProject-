<?php
/* @var $this FormElementController */
/* @var $model FormElement */

$this->breadcrumbs=array(
	'Form Elements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormElement', 'url'=>array('index')),
	array('label'=>'Manage FormElement', 'url'=>array('admin')),
);
?>

<h1>Create FormElement</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>