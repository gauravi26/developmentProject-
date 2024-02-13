<?php
/* @var $this FormThemeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Themes',
);

$this->menu=array(
	array('label'=>'Create FormTheme', 'url'=>array('create')),
	array('label'=>'Manage FormTheme', 'url'=>array('admin')),
);
?>

<h1>Form Themes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
