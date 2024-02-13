<?php
/* @var $this FormElementCssPropertiesThemeMappingController */
/* @var $model FormElementCssPropertiesThemeMapping */

$this->breadcrumbs=array(
	'Form Element Css Properties Theme Mappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FormElementCssPropertiesThemeMapping', 'url'=>array('index')),
	array('label'=>'Create FormElementCssPropertiesThemeMapping', 'url'=>array('create')),
	array('label'=>'Update FormElementCssPropertiesThemeMapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FormElementCssPropertiesThemeMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormElementCssPropertiesThemeMapping', 'url'=>array('admin')),
);
?>

<h1>View FormElementCssPropertiesThemeMapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'theme_ID',
		'form_element_css_properties_id',
		'value',
	),
)); ?>
