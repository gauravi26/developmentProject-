<?php
/* @var $this FormFieldCsspropertyValueMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Field Cssproperty Value Mappings',
);

$this->menu=array(
	array('label'=>'Create FormFieldCsspropertyValueMapping', 'url'=>array('create')),
	array('label'=>'Manage FormFieldCsspropertyValueMapping', 'url'=>array('admin')),
);
?>

<h1>Form Field Cssproperty Value Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
