<?php
/* @var $this FormFieldCsspropertyValueMappingController */
/* @var $model FormFieldCsspropertyValueMapping */

$this->breadcrumbs=array(
	'Form Field Cssproperty Value Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormFieldCsspropertyValueMapping', 'url'=>array('index')),
	array('label'=>'Manage FormFieldCsspropertyValueMapping', 'url'=>array('admin')),
);
?>

<h1>Create FormFieldCsspropertyValueMapping</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>