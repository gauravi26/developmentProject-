<?php
/* @var $this FacultyThemeMappingController */
/* @var $model FacultyThemeMapping */

$this->breadcrumbs=array(
	'Faculty Theme Mappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FacultyThemeMapping', 'url'=>array('index')),
	array('label'=>'Create FacultyThemeMapping', 'url'=>array('create')),
	array('label'=>'Update FacultyThemeMapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FacultyThemeMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FacultyThemeMapping', 'url'=>array('admin')),
);
?>

<h1>View FacultyThemeMapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'faculty_id',
		'theme_ID',
	),
)); ?>
