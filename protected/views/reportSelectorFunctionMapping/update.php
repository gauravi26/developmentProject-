<?php
/* @var $this ReportSelectorFunctionParaActionController */
/* @var $model ReportSelectorFunctionParaAction */

$this->breadcrumbs=array(
	'Report Selector Function Para Actions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ReportSelectorFunctionParaAction', 'url'=>array('index')),
	array('label'=>'Create ReportSelectorFunctionParaAction', 'url'=>array('create')),
	array('label'=>'View ReportSelectorFunctionParaAction', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ReportSelectorFunctionParaAction', 'url'=>array('admin')),
);
?>

<h1>Update ReportSelectorFunctionParaAction <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>