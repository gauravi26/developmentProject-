<?php
/* @var $this ThemesController */
/* @var $model Themes */

$this->breadcrumbs=array(
	'Themes'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Themes', 'url'=>array('index')),
	array('label'=>'Create Themes', 'url'=>array('create')),
	array('label'=>'View Themes', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Themes', 'url'=>array('admin')),
);
?>

<h1>Update Themes <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>