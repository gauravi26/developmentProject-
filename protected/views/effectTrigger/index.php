<?php
/* @var $this EffectTriggerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Effect Triggers',
);

$this->menu=array(
	array('label'=>'Create EffectTrigger', 'url'=>array('create')),
	array('label'=>'Manage EffectTrigger', 'url'=>array('admin')),
);
?>

<h1>Effect Triggers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
