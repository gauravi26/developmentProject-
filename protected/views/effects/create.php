<?php
/* @var $this EffectsController */
/* @var $model Effects */

$this->breadcrumbs=array(
	'Effects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Effects', 'url'=>array('index')),
	array('label'=>'Manage Effects', 'url'=>array('admin')),
);
?>

<h1>Create Effects</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>