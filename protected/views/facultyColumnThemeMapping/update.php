<?php
/* @var $this FacultyColumnThemeMappingController */
/* @var $model FacultyColumnThemeMapping */

$this->breadcrumbs=array(
	'Faculty Column Theme Mappings'=>array('index'),
	$model->column_name=>array('view','id'=>$model->column_name),
	'Update',
);

$this->menu=array(
	array('label'=>'List FacultyColumnThemeMapping', 'url'=>array('index')),
	array('label'=>'Create FacultyColumnThemeMapping', 'url'=>array('create')),
	array('label'=>'View FacultyColumnThemeMapping', 'url'=>array('view', 'id'=>$model->column_name)),
	array('label'=>'Manage FacultyColumnThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Update FacultyColumnThemeMapping <?php echo $model->column_name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>