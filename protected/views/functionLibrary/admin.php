<?php
/* @var $this FunctionLibraryController */
/* @var $model FunctionLibrary */

$this->breadcrumbs=array(
	'Function Libraries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FunctionLibrary', 'url'=>array('index')),
	array('label'=>'Create FunctionLibrary', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#function-library-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Function Libraries</h1>

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
	'id'=>'function-library-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'function_display_name',
		'function_name',
		'function_description',
		'syntax',
		'class_name',
		/*
		'parameter_description',
		'return_type',
		'function_type',
		'button_function',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
