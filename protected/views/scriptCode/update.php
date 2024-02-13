<?php
/* @var $this ScriptCodeController */
/* @var $model ScriptCode */

$this->breadcrumbs=array(
	'Script Codes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ScriptCode', 'url'=>array('index')),
	array('label'=>'Create ScriptCode', 'url'=>array('create')),
	array('label'=>'View ScriptCode', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ScriptCode', 'url'=>array('admin')),
);
?>

<h1>Update ScriptCode <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>