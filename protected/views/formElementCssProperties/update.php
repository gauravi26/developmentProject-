<?php
/* @var $this FormElementCssPropertiesController */
/* @var $model FormElementCssProperties */

$this->breadcrumbs=array(
	'Form Element Css Properties'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormElementCssProperties', 'url'=>array('index')),
	array('label'=>'Create FormElementCssProperties', 'url'=>array('create')),
	array('label'=>'View FormElementCssProperties', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FormElementCssProperties', 'url'=>array('admin')),
);
?>

<h1>Update FormElementCssProperties <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>