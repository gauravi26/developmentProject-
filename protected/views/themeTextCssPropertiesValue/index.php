<?php
/* @var $this ThemeTextCssPropertiesValueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Theme Text Css Properties Values',
);

$this->menu=array(
	array('label'=>'Create ThemeTextCssPropertiesValue', 'url'=>array('create')),
	array('label'=>'Manage ThemeTextCssPropertiesValue', 'url'=>array('admin')),
);
?>

<h1>Theme Text Css Properties Values</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
