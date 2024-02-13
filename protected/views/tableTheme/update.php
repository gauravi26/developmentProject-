<?php
/* @var $this TableThemeController */
/* @var $model TableTheme */

$this->breadcrumbs=array(
	'Table Themes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TableTheme', 'url'=>array('index')),
	array('label'=>'Create TableTheme', 'url'=>array('create')),
	array('label'=>'View TableTheme', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TableTheme', 'url'=>array('admin')),
);
?>

<h1>Update TableTheme <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>