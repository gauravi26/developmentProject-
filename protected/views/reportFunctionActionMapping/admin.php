<?php
/* @var $this ReportFunctionActionMappingController */
/* @var $model ReportFunctionActionMapping */

$this->breadcrumbs=array(
	'Report Function Action Mappings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ReportFunctionActionMapping', 'url'=>array('index')),
	array('label'=>'Create ReportFunctionActionMapping', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#report-function-action-mapping-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Report Function Action Mappings</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'report-function-action-mapping-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'application_forms_id',
		'report_id',
		'function_library_id',
		'report_columns',
		'report_row',
		/*
		'fetched_function_to_call',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
