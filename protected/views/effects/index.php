<?php
/* @var $this EffectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Effects',
);

$this->menu=array(
	array('label'=>'Create Effects', 'url'=>array('create')),
	array('label'=>'Manage Effects', 'url'=>array('admin')),
);
?>

<h1>Effects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
