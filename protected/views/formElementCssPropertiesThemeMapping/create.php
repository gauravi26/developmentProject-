<?php
/* @var $this FormElementCssPropertiesThemeMappingController */
/* @var $model FormElementCssPropertiesThemeMapping */

$this->breadcrumbs=array(
	'Form Element Css Properties Theme Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormElementCssPropertiesThemeMapping', 'url'=>array('index')),
	array('label'=>'Manage FormElementCssPropertiesThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Create FormElementCssPropertiesThemeMapping</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>