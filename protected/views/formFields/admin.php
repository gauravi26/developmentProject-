<?php
/* @var $this FormFieldsController */
/* @var $model FormFields */

$this->breadcrumbs=array(
	'Form Fields'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FormFields', 'url'=>array('index')),
	array('label'=>'Create FormFields', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#form-fields-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Form Fields</h1>

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
	'id'=>'form-fields-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'FIELD_ID',
		'FORM_ID',
		'TITLE',
		'REQUIRED',
		'f_MATCH',
		'f_RANGE',
		/*
		'ERROR_MESSAGE',
		'OTHER_VALIDATOR',
		'WIDGET',
		'WIDGETPARAMS',
		'POSITION',
		'VISIBLE',
		'FORMULA_ID',
		'INPUT_TYPE',
		'field_condition_flag',
		'filter_query',
		'CRUD_VIEW',
		'dependent_on',
		'dependent_ParentCol',
		'onchange',
		'parent_ConnectedCol',
		'add_more',
		'addMore_inRowOf',
		'upload_folder',
		'language_id',
		'unique_flag',
		'parent_unique_column',
		'unique_combination',
		'active_language_event_table',
		'active_language_event_column',
		'readonly',
		'form_multivalue_mapping_tableName',
		'multivalue_mapping_form_value',
		'multivalue_mapping_data_value',
		'comment',
		'external_field',
		'table_column_id',
		'label_note',
		'parent_data_entry',
		'order_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
