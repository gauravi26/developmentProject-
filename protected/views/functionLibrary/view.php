<?php
/* @var $this FunctionLibraryController */
/* @var $model FunctionLibrary */

$this->breadcrumbs=array(
	'Function Libraries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FunctionLibrary', 'url'=>array('index')),
	array('label'=>'Create FunctionLibrary', 'url'=>array('create')),
	array('label'=>'Update FunctionLibrary', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FunctionLibrary', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FunctionLibrary', 'url'=>array('admin')),
);
?>

<h1>View FunctionLibrary #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'function_display_name',
		'function_name',
		'function_description',
		'syntax',
		'class_name',
		'parameter_description',
		'return_type',
		'function_type',
		'button_function',
	),
)); ?>
