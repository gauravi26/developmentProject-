<?php
/* @var $this ActionLibraryController */
/* @var $model ActionLibrary */

$this->breadcrumbs=array(
	'Action Libraries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ActionLibrary', 'url'=>array('index')),
	array('label'=>'Create ActionLibrary', 'url'=>array('create')),
	array('label'=>'Update ActionLibrary', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ActionLibrary', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ActionLibrary', 'url'=>array('admin')),
);
?>

<h1>View ActionLibrary #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'action_display_name',
		'action_name',
		'syntax',
		'parameter_count',
		'parameter_description',
		'action_type',
	),
)); ?>
