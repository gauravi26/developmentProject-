<?php
/* @var $this FormFieldsController */
/* @var $model FormFields */

$this->breadcrumbs=array(
	'Form Fields'=>array('index'),
	$model->TITLE,
);

$this->menu=array(
	array('label'=>'List FormFields', 'url'=>array('index')),
	array('label'=>'Create FormFields', 'url'=>array('create')),
	array('label'=>'Update FormFields', 'url'=>array('update', 'id'=>$model->FIELD_ID)),
	array('label'=>'Delete FormFields', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FIELD_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormFields', 'url'=>array('admin')),
);
?>

<h1>View FormFields #<?php echo $model->FIELD_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FIELD_ID',
		'FORM_ID',
		'TITLE',
		'REQUIRED',
		'f_MATCH',
		'f_RANGE',
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
	),
)); ?>
