<?php
/* @var $this ReportSelectorFunctionMappingController */
/* @var $model ReportSelectorFunctionMapping */

$this->breadcrumbs=array(
    'Report Selector Function Mappings'=>array('index'),
    $model->id,
);

$this->menu=array(
    array('label'=>'List ReportSelectorFunctionMapping', 'url'=>array('index')),
    array('label'=>'Create ReportSelectorFunctionMapping', 'url'=>array('create')),
    array('label'=>'Update ReportSelectorFunctionMapping', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete ReportSelectorFunctionMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage ReportSelectorFunctionMapping', 'url'=>array('admin')),
);
?>

<h1>View ReportSelectorFunctionMapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'report_id',
        'report_column',
        'report_row',
        'function_library_id',
    ),
)); ?>