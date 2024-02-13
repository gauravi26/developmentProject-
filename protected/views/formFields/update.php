<?php
/* @var $this FormFieldsController */
/* @var $model FormFields */

$this->breadcrumbs=array(
	'Form Fields'=>array('index'),
	$model->TITLE=>array('view','id'=>$model->FIELD_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormFields', 'url'=>array('index')),
	array('label'=>'Create FormFields', 'url'=>array('create')),
	array('label'=>'View FormFields', 'url'=>array('view', 'id'=>$model->FIELD_ID)),
	array('label'=>'Manage FormFields', 'url'=>array('admin')),
);
?>

<h1>Update FormFields <?php echo $model->FIELD_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>