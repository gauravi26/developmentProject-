<?php
/* @var $this FacultyThemeMappingController */
/* @var $model FacultyThemeMapping */

$this->breadcrumbs=array(
	'Faculty Theme Mappings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FacultyThemeMapping', 'url'=>array('index')),
	array('label'=>'Create FacultyThemeMapping', 'url'=>array('create')),
	array('label'=>'View FacultyThemeMapping', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FacultyThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Update FacultyThemeMapping <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>