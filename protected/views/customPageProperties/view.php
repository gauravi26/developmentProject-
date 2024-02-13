<?php
/* @var $this CustomPagePropertiesController */
/* @var $model CustomPageProperties */

$this->breadcrumbs=array(
	'Custom Page Properties'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CustomPageProperties', 'url'=>array('index')),
	array('label'=>'Create CustomPageProperties', 'url'=>array('create')),
	array('label'=>'Update CustomPageProperties', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CustomPageProperties', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomPageProperties', 'url'=>array('admin')),
);
?>

<h1>View CustomPageProperties #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'application_forms_id',
		'element',
		'css_properties',
		'value',
	),
)); ?>
