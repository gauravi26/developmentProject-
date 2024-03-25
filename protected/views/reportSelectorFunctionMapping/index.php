<?php
/* @var $this ReportSelectorFunctionParaActionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Report Selector Function Para Actions',
);

$this->menu=array(
	array('label'=>'Create ReportSelectorFunctionParaAction', 'url'=>array('create')),
	array('label'=>'Manage ReportSelectorFunctionParaAction', 'url'=>array('admin')),
);
?>

<h1>Report Selector Function Para Actions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
