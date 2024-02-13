<?php
/* @var $this ApplicationFormsController */
/* @var $model ApplicationForms */

$this->breadcrumbs=array(
	'Application Forms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ApplicationForms', 'url'=>array('index')),
	array('label'=>'Create ApplicationForms', 'url'=>array('create')),
	array('label'=>'Update ApplicationForms', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ApplicationForms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ApplicationForms', 'url'=>array('admin')),
);
?>

<h1>View ApplicationForms #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'menu_form',
	),
)); ?>
