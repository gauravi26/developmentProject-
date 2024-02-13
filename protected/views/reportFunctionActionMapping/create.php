<?php
/* @var $this ReportFunctionActionMappingController */
/* @var $model ReportFunctionActionMapping */

$this->breadcrumbs=array(
	'Report Function Action Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ReportFunctionActionMapping', 'url'=>array('index')),
	array('label'=>'Manage ReportFunctionActionMapping', 'url'=>array('admin')),
);
?>

<h1>Create ReportFunctionActionMapping</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>