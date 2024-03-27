<?php
/* @var $this ThemesController */
/* @var $model Themes */

$this->breadcrumbs=array(
	'Themes'=>array('index'),
	$model->ID=>array('cssinputview','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Themes', 'url'=>array('index')),
	array('label'=>'Create Themes', 'url'=>array('cssinput')),
	array('label'=>'View Themes', 'url'=>array('cssinputview', 'id'=>$model->ID)),
	array('label'=>'Manage Themes', 'url'=>array('admin')),
);
?>

<h1>Update Themes <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('cssinputupdate', array('model'=>$model)); ?>