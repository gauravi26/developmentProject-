<?php
/* @var $this ReportSelectorFunctionParaActionController */
/* @var $model ReportSelectorFunctionParaAction */

$this->breadcrumbs=array(
	'Report Selector Function Para Actions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ReportSelectorFunctionParaAction', 'url'=>array('index')),
	array('label'=>'Create ReportSelectorFunctionParaAction', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#report-selector-function-para-action-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Report Selector Function Para Actions</h1>

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
	'id'=>'report-selector-function-para-action-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'report_id',
		'report_column',
		'report_row',
		'function_library_id',
		'function_library_parameter',
		/*
		'action_id',
		'script_to_call',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
