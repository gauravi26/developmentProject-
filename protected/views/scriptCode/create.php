<?php
/* @var $this ScriptCodeController */
/* @var $model ScriptCode */

$this->breadcrumbs=array(
	'Script Codes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ScriptCode', 'url'=>array('index')),
	array('label'=>'Manage ScriptCode', 'url'=>array('admin')),
);
?>

<h1>Create ScriptCode</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>