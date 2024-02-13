<?php
/* @var $this CustomPagePropertiesController */
/* @var $model CustomPageProperties */

$this->breadcrumbs=array(
	'Custom Page Properties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CustomPageProperties', 'url'=>array('index')),
	array('label'=>'Manage CustomPageProperties', 'url'=>array('admin')),
);
?>

<h1>Create CustomPageProperties</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>