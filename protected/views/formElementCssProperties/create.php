<?php
/* @var $this FormElementCssPropertiesController */
/* @var $model FormElementCssProperties */

$this->breadcrumbs=array(
	'Form Element Css Properties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormElementCssProperties', 'url'=>array('index')),
	array('label'=>'Manage FormElementCssProperties', 'url'=>array('admin')),
);
?>

<h1>Create FormElementCssProperties</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>