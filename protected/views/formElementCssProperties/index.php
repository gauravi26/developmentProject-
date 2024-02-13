<?php
/* @var $this FormElementCssPropertiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Element Css Properties',
);

$this->menu=array(
	array('label'=>'Create FormElementCssProperties', 'url'=>array('create')),
	array('label'=>'Manage FormElementCssProperties', 'url'=>array('admin')),
);
?>

<h1>Form Element Css Properties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
