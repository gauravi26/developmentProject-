<?php
/* @var $this EffectTriggerController */
/* @var $model EffectTrigger */

$this->breadcrumbs=array(
	'Effect Triggers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EffectTrigger', 'url'=>array('index')),
	array('label'=>'Create EffectTrigger', 'url'=>array('create')),
	array('label'=>'View EffectTrigger', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EffectTrigger', 'url'=>array('admin')),
);
?>

<h1>Update EffectTrigger <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>