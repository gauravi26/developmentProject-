<?php
/* @var $this FormElementCssPropertiesThemeMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Element Css Properties Theme Mappings',
);

$this->menu=array(
	array('label'=>'Create FormElementCssPropertiesThemeMapping', 'url'=>array('create')),
	array('label'=>'Manage FormElementCssPropertiesThemeMapping', 'url'=>array('admin')),
);
?>

<h1>Form Element Css Properties Theme Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
