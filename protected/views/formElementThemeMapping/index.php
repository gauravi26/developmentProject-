<?php
/* @var $this FormElementThemeMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Element Theme Mappings',
);

$this->menu=array(
	array('label'=>'Create FormElementThemeMapping', 'url'=>array('create')),
	array('label'=>'Manage FormElementThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Form Element Theme Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
