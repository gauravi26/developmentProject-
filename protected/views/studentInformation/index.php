<?php
/* @var $this StudentInformationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Student Informations',
);

$this->menu=array(
	array('label'=>'Create StudentInformation', 'url'=>array('create')),
	array('label'=>'Manage StudentInformation', 'url'=>array('admin')),
);
?>

<h1>Student Informations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
