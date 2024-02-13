<?php
/* @var $this FacultyThemeMappingController */
/* @var $model FacultyThemeMapping */

$this->breadcrumbs=array(
	'Faculty Theme Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FacultyThemeMapping', 'url'=>array('index')),
	array('label'=>'Manage FacultyThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Create FacultyThemeMapping</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>