<?php
/* @var $this AddressController */
/* @var $model Address */

$this->breadcrumbs=array(
	'Addresses'=>array('index'),
	$model->plotno=>array('view','id'=>$model->plotno),
	'Update',
);

$this->menu=array(
	array('label'=>'List Address', 'url'=>array('index')),
	array('label'=>'Create Address', 'url'=>array('create')),
	array('label'=>'View Address', 'url'=>array('view', 'id'=>$model->plotno)),
	array('label'=>'Manage Address', 'url'=>array('admin')),
);
?>

<h1>Update Address <?php echo $model->plotno; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>