<?php
/* @var $this FormThemeMappingController */
/* @var $model FormThemeMapping */

$this->breadcrumbs=array(
	'Form Theme Mappings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormThemeMapping', 'url'=>array('index')),
	array('label'=>'Create FormThemeMapping', 'url'=>array('create')),
	array('label'=>'View FormThemeMapping', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FormThemeMapping', 'url'=>array('admin')),
);
?>

<!--<h1>Update FormThemeMapping <?php echo $model->id; ?></h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>