<?php
/* @var $this EffectTriggerController */
/* @var $model EffectTrigger */

$this->breadcrumbs=array(
	'Effect Triggers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EffectTrigger', 'url'=>array('index')),
	array('label'=>'Create EffectTrigger', 'url'=>array('create')),
	array('label'=>'Update EffectTrigger', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EffectTrigger', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EffectTrigger', 'url'=>array('admin')),
);
?>

<h1>View EffectTrigger #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'effect_trigger',
	),
)); ?>
