<?php
/* @var $this NightTimeSettingsController */
/* @var $model NightTimeSettings */

$this->breadcrumbs=array(
	'Night Time Settings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NightTimeSettings', 'url'=>array('index')),
	array('label'=>'Create NightTimeSettings', 'url'=>array('create')),
	array('label'=>'View NightTimeSettings', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NightTimeSettings', 'url'=>array('admin')),
);
?>

<h1>Update NightTimeSettings <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>