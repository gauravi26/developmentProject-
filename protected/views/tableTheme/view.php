<?php
/* @var $this TableThemeController */
/* @var $model TableTheme */

$this->breadcrumbs=array(
	'Table Themes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TableTheme', 'url'=>array('index')),
	array('label'=>'Create TableTheme', 'url'=>array('create')),
	array('label'=>'Update TableTheme', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TableTheme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TableTheme', 'url'=>array('admin')),
);
?>

<h1>View TableTheme #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'report_id',
		'report_element_name',
		'report_element',
		'theme_name',
		'css_property',
		'value',
	),
)); ?>
