<?php
/* @var $this ReportFunctionMappingController */
/* @var $model ReportFunctionMapping */

$this->breadcrumbs=array(
	'Report Function Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ReportFunctionMapping', 'url'=>array('index')),
	array('label'=>'Manage ReportFunctionMapping', 'url'=>array('admin')),
);
?>

<h1>Create ReportFunctionMapping</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>