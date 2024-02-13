<?php
/* @var $this FormFieldsController */
/* @var $model FormFields */

$this->breadcrumbs=array(
	'Form Fields'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormFields', 'url'=>array('index')),
	array('label'=>'Manage FormFields', 'url'=>array('admin')),
);
?>

<h1>Create FormFields</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>