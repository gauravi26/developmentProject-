<?php
/* @var $this TableThemeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Table Themes',
);

$this->menu=array(
	array('label'=>'Create TableTheme', 'url'=>array('create')),
	array('label'=>'Manage TableTheme', 'url'=>array('admin')),
);
?>

<h1>Table Themes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
