<?php
/* @var $this EffectsController */
/* @var $model Effects */

$this->breadcrumbs=array(
	'Effects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Effects', 'url'=>array('index')),
	array('label'=>'Create Effects', 'url'=>array('create')),
	array('label'=>'Update Effects', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Effects', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Effects', 'url'=>array('admin')),
);
?>

<h1>View Effects #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'form_id',
		'trigger_id',
		'FIELD_ID',
		'effect_code_id',
	),
)); ?>
