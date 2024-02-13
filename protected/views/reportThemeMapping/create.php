<?php
/* @var $this ReportThemeMappingController */
/* @var $model ReportThemeMapping */

$this->breadcrumbs=array(
	'Report Theme Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ReportThemeMapping', 'url'=>array('index')),
	array('label'=>'Manage ReportThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Create ReportThemeMapping</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>