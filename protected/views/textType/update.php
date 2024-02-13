<?php
/* @var $this TextTypeController */
/* @var $model TextType */

$this->breadcrumbs=array(
	'Text Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TextType', 'url'=>array('index')),
	array('label'=>'Create TextType', 'url'=>array('create')),
	array('label'=>'View TextType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TextType', 'url'=>array('admin')),
);
?>

<h1>Update TextType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>