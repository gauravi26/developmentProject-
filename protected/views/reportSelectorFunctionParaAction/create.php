<?php
/* @var $this ReportSelectorFunctionParaActionController */
/* @var $model ReportSelectorFunctionParaAction */

$this->breadcrumbs=array(
	'Report Selector Function Para Actions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ReportSelectorFunctionParaAction', 'url'=>array('index')),
	array('label'=>'Manage ReportSelectorFunctionParaAction', 'url'=>array('admin')),
);
?>

<h1>Create ReportSelectorFunctionParaAction</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>