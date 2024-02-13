<?php
/* @var $this ThemeForReportController */
/* @var $model ThemeForReport */

$this->breadcrumbs=array(
	'Theme For Reports'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ThemeForReport', 'url'=>array('index')),
	array('label'=>'Create ThemeForReport', 'url'=>array('create')),
	array('label'=>'View ThemeForReport', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ThemeForReport', 'url'=>array('admin')),
);
?>

<h1>Update ThemeForReport <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>