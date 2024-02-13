<?php
/* @var $this ThemeTextCssPropertiesValueController */
/* @var $model ThemeTextCssPropertiesValue */

$this->breadcrumbs=array(
	'Theme Text Css Properties Values'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ThemeTextCssPropertiesValue', 'url'=>array('index')),
	array('label'=>'Manage ThemeTextCssPropertiesValue', 'url'=>array('admin')),
);
?>

<h1>Create ThemeTextCssPropertiesValue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>