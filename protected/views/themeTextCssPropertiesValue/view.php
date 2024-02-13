<?php
/* @var $this ThemeTextCssPropertiesValueController */
/* @var $model ThemeTextCssPropertiesValue */

$this->breadcrumbs=array(
	'Theme Text Css Properties Values'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ThemeTextCssPropertiesValue', 'url'=>array('index')),
	array('label'=>'Create ThemeTextCssPropertiesValue', 'url'=>array('create')),
	array('label'=>'Update ThemeTextCssPropertiesValue', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ThemeTextCssPropertiesValue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ThemeTextCssPropertiesValue', 'url'=>array('admin')),
);
?>

<h1>View ThemeTextCssPropertiesValue #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'theme_id',
		'text_type_id',
		'text_CSS_Property',
		'value',
		'created_at',
		'updated_at',
	),
)); ?>
