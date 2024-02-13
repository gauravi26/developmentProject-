<?php
/* @var $this ApplicationFormsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Application Forms',
);

$this->menu=array(
	array('label'=>'Create ApplicationForms', 'url'=>array('create')),
	array('label'=>'Manage ApplicationForms', 'url'=>array('admin')),
);
?>

<h1>Application Forms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
