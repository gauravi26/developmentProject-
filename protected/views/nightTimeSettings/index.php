<?php
/* @var $this NightTimeSettingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Night Time Settings',
);

$this->menu=array(
	array('label'=>'Create NightTimeSettings', 'url'=>array('create')),
	array('label'=>'Manage NightTimeSettings', 'url'=>array('admin')),
);
?>

<h1>Night Time Settings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
