<?php
/* @var $this FacultyColumnThemeMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faculty Column Theme Mappings',
);

$this->menu=array(
	array('label'=>'Create FacultyColumnThemeMapping', 'url'=>array('create')),
	array('label'=>'Manage FacultyColumnThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Faculty Column Theme Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
