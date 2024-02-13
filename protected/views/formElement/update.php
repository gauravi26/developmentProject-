<?php
/* @var $this FormElementController */
/* @var $model FormElement */

$this->breadcrumbs=array(
	'Form Elements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormElement', 'url'=>array('index')),
	array('label'=>'Create FormElement', 'url'=>array('create')),
	array('label'=>'View FormElement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FormElement', 'url'=>array('admin')),
);
?>

<h1>Update FormElement <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>