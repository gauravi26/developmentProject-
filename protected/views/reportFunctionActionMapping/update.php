<?php
/* @var $this ReportFunctionActionMappingController */
/* @var $model ReportFunctionActionMapping */

$this->breadcrumbs=array(
	'Report Function Action Mappings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ReportFunctionActionMapping', 'url'=>array('index')),
	array('label'=>'Create ReportFunctionActionMapping', 'url'=>array('create')),
	array('label'=>'View ReportFunctionActionMapping', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ReportFunctionActionMapping', 'url'=>array('admin')),
);
?>

<h1>Update ReportFunctionActionMapping <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>