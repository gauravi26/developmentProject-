<?php
/* @var $this ReportSelectorFunctionParaActionController */
/* @var $model ReportSelectorFunctionParaAction */

$this->breadcrumbs=array(
	'Report Selector Function Para Actions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ReportSelectorFunctionParaAction', 'url'=>array('index')),
	array('label'=>'Create ReportSelectorFunctionParaAction', 'url'=>array('create')),
	array('label'=>'Update ReportSelectorFunctionParaAction', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ReportSelectorFunctionParaAction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ReportSelectorFunctionParaAction', 'url'=>array('admin')),
);
?>

<h1>View ReportSelectorFunctionParaAction #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'report_id',
		'report_column',
		'report_row',
		'function_library_id',
		'function_library_parameter',
		'action_id',
		'script_to_call',
	),
)); ?>
