<?php
/* @var $this FacultyThemeMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faculty Theme Mappings',
);

$this->menu=array(
	array('label'=>'Create FacultyThemeMapping', 'url'=>array('create')),
	array('label'=>'Manage FacultyThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Faculty Theme Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
