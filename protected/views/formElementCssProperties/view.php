<?php
/* @var $this FormElementCssPropertiesController */
/* @var $model FormElementCssProperties */

$this->breadcrumbs=array(
	'Form Element Css Properties'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FormElementCssProperties', 'url'=>array('index')),
	array('label'=>'Create FormElementCssProperties', 'url'=>array('create')),
	array('label'=>'Update FormElementCssProperties', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FormElementCssProperties', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormElementCssProperties', 'url'=>array('admin')),
);
?>

<h1>View FormElementCssProperties #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'element_id',
		'form_element',
		'css_property',
		'css_properties_id',
	),
)); ?>
