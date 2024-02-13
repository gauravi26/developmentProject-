<?php
/* @var $this FormElementThemeMappingController */
/* @var $model FormElementThemeMapping */

$this->breadcrumbs=array(
	'Form Element Theme Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormElementThemeMapping', 'url'=>array('index')),
	array('label'=>'Manage FormElementThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Create FormElementThemeMapping</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>