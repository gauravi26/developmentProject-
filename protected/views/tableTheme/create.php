<?php
/* @var $this TableThemeController */
/* @var $model TableTheme */

$this->breadcrumbs=array(
	'Table Themes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TableTheme', 'url'=>array('index')),
	array('label'=>'Manage TableTheme', 'url'=>array('admin')),
);
?>

<h1>Create TableTheme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>