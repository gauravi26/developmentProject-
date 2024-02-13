<?php
/* @var $this ReportFunctionParameterValueMappingController */
/* @var $model ReportFunctionParameterValueMapping */

$this->breadcrumbs=array(
	'Report Function Parameter Value Mappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ReportFunctionParameterValueMapping', 'url'=>array('index')),
	array('label'=>'Create ReportFunctionParameterValueMapping', 'url'=>array('create')),
	array('label'=>'Update ReportFunctionParameterValueMapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ReportFunctionParameterValueMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ReportFunctionParameterValueMapping', 'url'=>array('admin')),
);
?>

<h1>View ReportFunctionParameterValueMapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'report_function_mapping_id',
		'function_argument_map_id',
		'value',
	),
)); ?>
