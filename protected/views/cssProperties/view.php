<?php
/* @var $this CssPropertiesController */
/* @var $model CssProperties */

$this->breadcrumbs=array(
	'Css Properties'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CssProperties', 'url'=>array('index')),
	array('label'=>'Create CssProperties', 'url'=>array('create')),
	array('label'=>'Update CssProperties', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CssProperties', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CssProperties', 'url'=>array('admin')),
);
?>

<h1>View CssProperties #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'property_name',
		'property_value',
	),
)); ?>
