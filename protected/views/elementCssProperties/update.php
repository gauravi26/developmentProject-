<?php
/* @var $this ElementCssPropertiesController */
/* @var $model ElementCssProperties */

$this->breadcrumbs=array(
	'Element Css Properties'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ElementCssProperties', 'url'=>array('index')),
	array('label'=>'Create ElementCssProperties', 'url'=>array('create')),
	array('label'=>'View ElementCssProperties', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ElementCssProperties', 'url'=>array('admin')),
);
?>

<h1>Update ElementCssProperties <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>