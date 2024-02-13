<?php
/* @var $this ReportFunctionParameterValueMappingController */
/* @var $model ReportFunctionParameterValueMapping */

$this->breadcrumbs=array(
	'Report Function Parameter Value Mappings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ReportFunctionParameterValueMapping', 'url'=>array('index')),
	array('label'=>'Create ReportFunctionParameterValueMapping', 'url'=>array('create')),
	array('label'=>'View ReportFunctionParameterValueMapping', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ReportFunctionParameterValueMapping', 'url'=>array('admin')),
);
?>

<h1>Update ReportFunctionParameterValueMapping <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>