<?php
/* @var $this FormThemeController */
/* @var $model FormTheme */

$this->breadcrumbs=array(
	'Form Themes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormTheme', 'url'=>array('index')),
	array('label'=>'Create FormTheme', 'url'=>array('create')),
	array('label'=>'View FormTheme', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FormTheme', 'url'=>array('admin')),
);
?>

<h1>Update FormTheme <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>