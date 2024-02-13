<?php
/* @var $this FormFieldCsspropertyValueMappingController */
/* @var $model FormFieldCsspropertyValueMapping */

$this->breadcrumbs=array(
	'Form Field Cssproperty Value Mappings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormFieldCsspropertyValueMapping', 'url'=>array('index')),
	array('label'=>'Create FormFieldCsspropertyValueMapping', 'url'=>array('create')),
	array('label'=>'View FormFieldCsspropertyValueMapping', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FormFieldCsspropertyValueMapping', 'url'=>array('admin')),
);
?>

<h1>Update FormFieldCsspropertyValueMapping <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>