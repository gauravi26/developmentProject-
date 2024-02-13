<?php
/* @var $this CssPropertiesController */
/* @var $model CssProperties */

$this->breadcrumbs=array(
	'Css Properties'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CssProperties', 'url'=>array('index')),
	array('label'=>'Create CssProperties', 'url'=>array('create')),
	array('label'=>'View CssProperties', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CssProperties', 'url'=>array('admin')),
);
?>

<h1>Update CssProperties <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>