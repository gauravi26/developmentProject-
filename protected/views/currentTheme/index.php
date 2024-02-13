<?php
/* @var $this CurrentThemeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Current Themes',
);

$this->menu=array(
	array('label'=>'Create CurrentTheme', 'url'=>array('create')),
	array('label'=>'Manage CurrentTheme', 'url'=>array('admin')),
);
?>

<h1>Current Themes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
