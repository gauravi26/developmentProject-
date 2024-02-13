<?php
/* @var $this ReportFunctionMappingController */
/* @var $model ReportFunctionMapping */

$this->breadcrumbs=array(
	'Report Function Mappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ReportFunctionMapping', 'url'=>array('index')),
	array('label'=>'Create ReportFunctionMapping', 'url'=>array('create')),
	array('label'=>'Update ReportFunctionMapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ReportFunctionMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ReportFunctionMapping', 'url'=>array('admin')),
);
?>

<h1>View ReportFunctionMapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'application_forms_id',
		'report_id',
		'function_library_id',
		'report_columns',
		'report_row',
		'fetched_function_to_call',
	),
)); ?>
