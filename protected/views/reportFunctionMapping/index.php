<?php
/* @var $this ReportFunctionMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Report Function Mappings',
);

$this->menu=array(
	array('label'=>'Create ReportFunctionMapping', 'url'=>array('create')),
	array('label'=>'Manage ReportFunctionMapping', 'url'=>array('admin')),
);
?>

<h1>Report Function Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
