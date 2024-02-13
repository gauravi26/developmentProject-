<?php
/* @var $this CurrentThemeController */
/* @var $model CurrentTheme */

$this->breadcrumbs=array(
	'Current Themes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CurrentTheme', 'url'=>array('index')),
	array('label'=>'Create CurrentTheme', 'url'=>array('create')),
	array('label'=>'Update CurrentTheme', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CurrentTheme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CurrentTheme', 'url'=>array('admin')),
);
?>

<h1>View CurrentTheme #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'theme_ID',
	),
)); ?>
