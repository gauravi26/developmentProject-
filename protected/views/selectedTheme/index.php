<?php
/* @var $this SelectedThemeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Selected Themes',
);

$this->menu=array(
	array('label'=>'Create SelectedTheme', 'url'=>array('create')),
	array('label'=>'Manage SelectedTheme', 'url'=>array('admin')),
);
?>

<h1>Selected Themes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
