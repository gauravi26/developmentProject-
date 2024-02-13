<?php
/* @var $this EffectTriggerController */
/* @var $model EffectTrigger */

$this->breadcrumbs=array(
	'Effect Triggers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EffectTrigger', 'url'=>array('index')),
	array('label'=>'Manage EffectTrigger', 'url'=>array('admin')),
);
?>

<h1>Create EffectTrigger</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>