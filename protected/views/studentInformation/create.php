<?php
/* @var $this StudentInformationController */
/* @var $model StudentInformation */

$this->breadcrumbs=array(
	'Student Informations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StudentInformation', 'url'=>array('index')),
	array('label'=>'Manage StudentInformation', 'url'=>array('admin')),
);
?>

<h1>Create StudentInformation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>