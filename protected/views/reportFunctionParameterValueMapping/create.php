<?php
/* @var $this ReportFunctionParameterValueMappingController */
/* @var $model ReportFunctionParameterValueMapping */

$this->breadcrumbs=array(
	'Report Function Parameter Value Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ReportFunctionParameterValueMapping', 'url'=>array('index')),
	array('label'=>'Manage ReportFunctionParameterValueMapping', 'url'=>array('admin')),
);
?>

<h1>Create ReportFunctionParameterValueMapping</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>