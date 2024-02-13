<?php
/* @var $this FormElementThemeMappingController */
/* @var $model FormElementThemeMapping */

$this->breadcrumbs=array(
	'Form Element Theme Mappings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormElementThemeMapping', 'url'=>array('index')),
	array('label'=>'Create FormElementThemeMapping', 'url'=>array('create')),
	array('label'=>'View FormElementThemeMapping', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FormElementThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Update FormElementThemeMapping <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>