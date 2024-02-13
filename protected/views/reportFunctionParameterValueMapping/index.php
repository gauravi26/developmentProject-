<?php
/* @var $this ReportFunctionParameterValueMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Report Function Parameter Value Mappings',
);

$this->menu=array(
	array('label'=>'Create ReportFunctionParameterValueMapping', 'url'=>array('create')),
	array('label'=>'Manage ReportFunctionParameterValueMapping', 'url'=>array('admin')),
);
?>

<h1>Report Function Parameter Value Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
