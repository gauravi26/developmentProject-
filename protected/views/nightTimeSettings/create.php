<?php
/* @var $this NightTimeSettingsController */
/* @var $model NightTimeSettings */

$this->breadcrumbs=array(
	'Night Time Settings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NightTimeSettings', 'url'=>array('index')),
	array('label'=>'Manage NightTimeSettings', 'url'=>array('admin')),
);
?>

<h1>Create NightTimeSettings</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>