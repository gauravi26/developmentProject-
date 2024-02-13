<?php
/* @var $this ElementCssPropertiesController */
/* @var $model ElementCssProperties */

$this->breadcrumbs=array(
	'Element Css Properties'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ElementCssProperties', 'url'=>array('index')),
	array('label'=>'Create ElementCssProperties', 'url'=>array('create')),
	array('label'=>'Update ElementCssProperties', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ElementCssProperties', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ElementCssProperties', 'url'=>array('admin')),
);
?>

<h1>View ElementCssProperties #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'element_id',
		'theme_columns',
		'css_properties_id',
	),
)); ?>
