<?php
/* @var $this FormThemeMappingController */
/* @var $model FormThemeMapping */

$this->breadcrumbs=array(
	'Form Theme Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormThemeMapping', 'url'=>array('index')),
	array('label'=>'Manage FormThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Create FormThemeMapping</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>