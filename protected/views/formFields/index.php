<?php
/* @var $this FormFieldsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Fields',
);

$this->menu=array(
	array('label'=>'Create FormFields', 'url'=>array('create')),
	array('label'=>'Manage FormFields', 'url'=>array('admin')),
);
?>

<h1>Form Fields</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
