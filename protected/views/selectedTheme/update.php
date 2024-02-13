<?php
/* @var $this SelectedThemeController */
/* @var $model SelectedTheme */

$this->breadcrumbs=array(
	'Selected Themes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SelectedTheme', 'url'=>array('index')),
	array('label'=>'Create SelectedTheme', 'url'=>array('create')),
	array('label'=>'View SelectedTheme', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SelectedTheme', 'url'=>array('admin')),
);
?>

<h1>Update SelectedTheme <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>