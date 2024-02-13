<?php
/* @var $this FormElementCssPropertiesThemeMappingController */
/* @var $model FormElementCssPropertiesThemeMapping */

$this->breadcrumbs=array(
	'Form Element Css Properties Theme Mappings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormElementCssPropertiesThemeMapping', 'url'=>array('index')),
	array('label'=>'Create FormElementCssPropertiesThemeMapping', 'url'=>array('create')),
	array('label'=>'View FormElementCssPropertiesThemeMapping', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FormElementCssPropertiesThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Update FormElementCssPropertiesThemeMapping <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>