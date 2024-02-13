<?php
/* @var $this FormElementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Elements',
);

$this->menu=array(
	array('label'=>'Create FormElement', 'url'=>array('create')),
	array('label'=>'Manage FormElement', 'url'=>array('admin')),
);
?>

<h1>Form Elements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
