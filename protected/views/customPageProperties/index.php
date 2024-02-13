<?php
/* @var $this CustomPagePropertiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Custom Page Properties',
);

$this->menu=array(
	array('label'=>'Create CustomPageProperties', 'url'=>array('create')),
	array('label'=>'Manage CustomPageProperties', 'url'=>array('admin')),
);
?>

<h1>Custom Page Properties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
