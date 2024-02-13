<?php
/* @var $this CurrentThemeController */
/* @var $model CurrentTheme */

$this->breadcrumbs=array(
	'Current Themes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CurrentTheme', 'url'=>array('index')),
	array('label'=>'Manage CurrentTheme', 'url'=>array('admin')),
);
?>

<h1>Create CurrentTheme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>