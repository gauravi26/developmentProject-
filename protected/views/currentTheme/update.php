<?php
/* @var $this CurrentThemeController */
/* @var $model CurrentTheme */

$this->breadcrumbs=array(
	'Current Themes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CurrentTheme', 'url'=>array('index')),
	array('label'=>'Create CurrentTheme', 'url'=>array('create')),
	array('label'=>'View CurrentTheme', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CurrentTheme', 'url'=>array('admin')),
);
?>

<h1>Update Current Theme <?php // echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>