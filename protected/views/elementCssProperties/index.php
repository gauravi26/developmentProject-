<?php
/* @var $this ElementCssPropertiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Element Css Properties',
);

$this->menu=array(
	array('label'=>'Create ElementCssProperties', 'url'=>array('create')),
	array('label'=>'Manage ElementCssProperties', 'url'=>array('admin')),
);
?>

<h1>Element Css Properties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
