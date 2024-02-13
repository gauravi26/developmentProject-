<?php
/* @var $this SelectedThemeController */
/* @var $model SelectedTheme */

$this->breadcrumbs=array(
	'Selected Themes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SelectedTheme', 'url'=>array('index')),
	array('label'=>'Create SelectedTheme', 'url'=>array('create')),
	array('label'=>'Update SelectedTheme', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SelectedTheme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SelectedTheme', 'url'=>array('admin')),
);
?>

<h1>View SelectedTheme #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'theme_ID',
	),
)); ?>
