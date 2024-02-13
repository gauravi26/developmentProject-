<?php
/* @var $this FacultyColumnThemeMappingController */
/* @var $model FacultyColumnThemeMapping */

$this->breadcrumbs=array(
	'Faculty Column Theme Mappings'=>array('index'),
	$model->column_name,
);

$this->menu=array(
	array('label'=>'List FacultyColumnThemeMapping', 'url'=>array('index')),
	array('label'=>'Create FacultyColumnThemeMapping', 'url'=>array('create')),
	array('label'=>'Update FacultyColumnThemeMapping', 'url'=>array('update', 'id'=>$model->column_name)),
	array('label'=>'Delete FacultyColumnThemeMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->column_name),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FacultyColumnThemeMapping', 'url'=>array('admin')),
);
?>

<h1>View FacultyColumnThemeMapping #<?php echo $model->column_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'column_name',
		'theme_ID',
	),
)); ?>
