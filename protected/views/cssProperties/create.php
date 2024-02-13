<?php
/* @var $this CssPropertiesController */
/* @var $model CssProperties */

$this->breadcrumbs=array(
	'Css Properties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CssProperties', 'url'=>array('index')),
	array('label'=>'Manage CssProperties', 'url'=>array('admin')),
);
?>

<h1>Create CssProperties</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>