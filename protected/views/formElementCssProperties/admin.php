<?php
/* @var $this FormElementCssPropertiesController */
/* @var $model FormElementCssProperties */

$this->breadcrumbs=array(
	'Form Element Css Properties'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FormElementCssProperties', 'url'=>array('index')),
	array('label'=>'Create FormElementCssProperties', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#form-element-css-properties-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Form Element Css Properties</h1>

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
	'id'=>'form-element-css-properties-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'element_id',
		'form_element',
		'css_property',
		'css_properties_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
