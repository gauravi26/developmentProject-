<?php
/* @var $this CssPropertiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Css Properties',
);

$this->menu=array(
	array('label'=>'Create CssProperties', 'url'=>array('create')),
	array('label'=>'Manage CssProperties', 'url'=>array('admin')),
);
?>

<h1>Css Properties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
