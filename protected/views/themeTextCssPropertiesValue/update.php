<?php
/* @var $this ThemeTextCssPropertiesValueController */
/* @var $model ThemeTextCssPropertiesValue */

$this->breadcrumbs=array(
	'Theme Text Css Properties Values'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ThemeTextCssPropertiesValue', 'url'=>array('index')),
	array('label'=>'Create ThemeTextCssPropertiesValue', 'url'=>array('create')),
	array('label'=>'View ThemeTextCssPropertiesValue', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ThemeTextCssPropertiesValue', 'url'=>array('admin')),
);
?>

<h1>Update ThemeTextCssPropertiesValue <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>