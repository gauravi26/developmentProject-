<?php
/* @var $this FormElementThemeMappingController */
/* @var $model FormElementThemeMapping */

$this->breadcrumbs=array(
	'Form Element Theme Mappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FormElementThemeMapping', 'url'=>array('index')),
	array('label'=>'Create FormElementThemeMapping', 'url'=>array('create')),
	array('label'=>'Update FormElementThemeMapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FormElementThemeMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormElementThemeMapping', 'url'=>array('admin')),
);
?>

<h1>View FormElementThemeMapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'application_forms_id',
		'form_element_id',
		'theme_ID',
	),
)); ?>
