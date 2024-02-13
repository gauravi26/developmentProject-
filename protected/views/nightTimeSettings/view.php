<?php
/* @var $this NightTimeSettingsController */
/* @var $model NightTimeSettings */

$this->breadcrumbs=array(
	'Night Time Settings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NightTimeSettings', 'url'=>array('index')),
	array('label'=>'Create NightTimeSettings', 'url'=>array('create')),
	array('label'=>'Update NightTimeSettings', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NightTimeSettings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NightTimeSettings', 'url'=>array('admin')),
);
?>

<h1>View NightTimeSettings #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nightStart',
		'nightEnd',
	),
)); ?>
