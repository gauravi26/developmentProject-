<?php
/* @var $this FacultyColumnThemeMappingController */
/* @var $model FacultyColumnThemeMapping */

$this->breadcrumbs=array(
	'Faculty Column Theme Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FacultyColumnThemeMapping', 'url'=>array('index')),
	array('label'=>'Manage FacultyColumnThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Create FacultyColumnThemeMapping</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>