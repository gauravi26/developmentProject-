<?php
/* @var $this CustomPagePropertiesController */
/* @var $model CustomPageProperties */

$this->breadcrumbs=array(
	'Custom Page Properties'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomPageProperties', 'url'=>array('index')),
	array('label'=>'Create CustomPageProperties', 'url'=>array('create')),
	array('label'=>'View CustomPageProperties', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CustomPageProperties', 'url'=>array('admin')),
);
?>

<h1>Update CustomPageProperties <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>