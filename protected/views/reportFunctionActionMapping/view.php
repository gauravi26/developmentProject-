<?php
/* @var $this ReportFunctionActionMappingController */
/* @var $model ReportFunctionActionMapping */

$this->breadcrumbs=array(
	'Report Function Action Mappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ReportFunctionActionMapping', 'url'=>array('index')),
	array('label'=>'Create ReportFunctionActionMapping', 'url'=>array('create')),
	array('label'=>'Update ReportFunctionActionMapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ReportFunctionActionMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ReportFunctionActionMapping', 'url'=>array('admin')),
);
?>

<h1>View ReportFunctionActionMapping #<?php echo $model->id; ?></h1>

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
