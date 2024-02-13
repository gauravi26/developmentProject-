<?php
/* @var $this ThemeForReportController */
/* @var $model ThemeForReport */

$this->breadcrumbs=array(
	'Theme For Reports'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ThemeForReport', 'url'=>array('index')),
	array('label'=>'Manage ThemeForReport', 'url'=>array('admin')),
);
?>

<h1>Create ThemeForReport</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>