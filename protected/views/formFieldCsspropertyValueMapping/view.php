<?php
/* @var $this FormFieldCsspropertyValueMappingController */
/* @var $model FormFieldCsspropertyValueMapping */

$this->breadcrumbs=array(
	'Form Field Cssproperty Value Mappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FormFieldCsspropertyValueMapping', 'url'=>array('index')),
	array('label'=>'Create FormFieldCsspropertyValueMapping', 'url'=>array('create')),
	array('label'=>'Update FormFieldCsspropertyValueMapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FormFieldCsspropertyValueMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormFieldCsspropertyValueMapping', 'url'=>array('admin')),
);
?>

<h1>View FormFieldCsspropertyValueMapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'form_id',
		'field_id',
		'css_property_id',
		'value',
	),
)); ?>
