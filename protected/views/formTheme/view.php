<?php
/* @var $this FormThemeController */
/* @var $model FormTheme */

$this->breadcrumbs=array(
	'Form Themes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FormTheme', 'url'=>array('index')),
	array('label'=>'Create FormTheme', 'url'=>array('create')),
	array('label'=>'Update FormTheme', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FormTheme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormTheme', 'url'=>array('admin')),
);
?>

<h1>View FormTheme #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'form_element',
		'property',
		'value',
		'form_theme_name',
	),
)); ?>
