<?php
/* @var $this TableThemeController */
/* @var $model TableTheme */

$this->breadcrumbs=array(
	'Table Themes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TableTheme', 'url'=>array('index')),
	array('label'=>'Create TableTheme', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#table-theme-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Table Themes</h1>

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
	'id'=>'table-theme-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'report_id',
		'report_element_name',
		'report_element',
		'theme_name',
		'css_property',
		/*
		'value',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
