<?php
/* @var $this ElementCssPropertiesController */
/* @var $model ElementCssProperties */

$this->breadcrumbs=array(
	'Element Css Properties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ElementCssProperties', 'url'=>array('index')),
	array('label'=>'Manage ElementCssProperties', 'url'=>array('admin')),
);
?>

<h1>Create ElementCssProperties</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>