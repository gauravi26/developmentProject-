<?php
/* @var $this ApplicationFormsController */
/* @var $model ApplicationForms */

$this->breadcrumbs=array(
	'Application Forms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ApplicationForms', 'url'=>array('index')),
	array('label'=>'Create ApplicationForms', 'url'=>array('create')),
	array('label'=>'View ApplicationForms', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ApplicationForms', 'url'=>array('admin')),
);
?>

<h1>Update ApplicationForms <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>