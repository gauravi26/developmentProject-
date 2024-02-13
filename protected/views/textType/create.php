<?php
/* @var $this TextTypeController */
/* @var $model TextType */

$this->breadcrumbs=array(
	'Text Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TextType', 'url'=>array('index')),
	array('label'=>'Manage TextType', 'url'=>array('admin')),
);
?>

<h1>Create TextType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>