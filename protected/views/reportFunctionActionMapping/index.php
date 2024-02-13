<?php
/* @var $this ReportFunctionActionMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Report Function Action Mappings',
);

$this->menu=array(
	array('label'=>'Create ReportFunctionActionMapping', 'url'=>array('create')),
	array('label'=>'Manage ReportFunctionActionMapping', 'url'=>array('admin')),
);
?>

<h1>Report Function Action Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
