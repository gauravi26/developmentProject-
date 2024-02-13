<?php
/* @var $this ThemesController */
/* @var $model Themes */

$this->breadcrumbs=array(
	'Themes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Themes', 'url'=>array('index')),
	array('label'=>'Manage Themes', 'url'=>array('admin')),
);
?>

<h1>Create Themes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>