<?php
/* @var $this FormElementController */
/* @var $model FormElement */

$this->breadcrumbs=array(
	'Form Elements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FormElement', 'url'=>array('index')),
	array('label'=>'Create FormElement', 'url'=>array('create')),
	array('label'=>'Update FormElement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FormElement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormElement', 'url'=>array('admin')),
);
?>

<h1>View FormElement #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'element_name',
		'element_type',
		'input_type',
	),
)); ?>
