<?php
/* @var $this ReportSelectorFunctionMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Report Selector Function Mappings',
);

$this->menu=array(
    array('label'=>'Create ReportSelectorFunctionMapping', 'url'=>array('customCreate')),
    array('label'=>'Manage ReportSelectorFunctionMapping', 'url'=>array('admin')),
);
?>

<h1>Report Selector Function Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>
