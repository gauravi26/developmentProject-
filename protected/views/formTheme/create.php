<?php
/* @var $this FormThemeController */
/* @var $model FormTheme */

$this->breadcrumbs=array(
	'Form Themes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormTheme', 'url'=>array('index')),
	array('label'=>'Manage FormTheme', 'url'=>array('admin')),
);
?>

<h1>Create FormTheme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>