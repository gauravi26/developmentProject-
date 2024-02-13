<?php
/* @var $this FormThemeMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Theme Mappings',
);

$this->menu=array(
	array('label'=>'Create FormThemeMapping', 'url'=>array('create')),
	array('label'=>'Manage FormThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Form Theme Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
