<?php
/* @var $this ThemeForReportController */
/* @var $model ThemeForReport */

$this->breadcrumbs=array(
	'Theme For Reports'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ThemeForReport', 'url'=>array('index')),
	array('label'=>'Create ThemeForReport', 'url'=>array('create')),
	array('label'=>'Update ThemeForReport', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ThemeForReport', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ThemeForReport', 'url'=>array('admin')),
);
?>

<h1>View ThemeForReport #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'reference_id',
		'theme_name',
		'element_id',
		'css_property_id',
		'value',
	),
)); ?>
