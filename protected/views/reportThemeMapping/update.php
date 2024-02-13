<?php
/* @var $this ReportThemeMappingController */
/* @var $model ReportThemeMapping */

$this->breadcrumbs=array(
	'Report Theme Mappings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ReportThemeMapping', 'url'=>array('index')),
	array('label'=>'Create ReportThemeMapping', 'url'=>array('create')),
	array('label'=>'View ReportThemeMapping', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ReportThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Update ReportThemeMapping <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>