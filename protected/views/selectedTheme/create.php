<?php
/* @var $this SelectedThemeController */
/* @var $model SelectedTheme */

$this->breadcrumbs=array(
	'Selected Themes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SelectedTheme', 'url'=>array('index')),
	array('label'=>'Manage SelectedTheme', 'url'=>array('admin')),
);
?>

<h1>Create SelectedTheme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>