<?php
/* @var $this ScriptCodeController */
/* @var $model ScriptCode */

$this->breadcrumbs=array(
	'Script Codes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ScriptCode', 'url'=>array('index')),
	array('label'=>'Create ScriptCode', 'url'=>array('create')),
	array('label'=>'Update ScriptCode', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ScriptCode', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ScriptCode', 'url'=>array('admin')),
);
?>

<h1>View ScriptCode #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'effects',
		'css',
		'code',
		'Description',
	),
)); ?>
