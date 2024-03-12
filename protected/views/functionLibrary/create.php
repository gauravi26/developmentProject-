<?php
/* @var $this FunctionLibraryController */
/* @var $model FunctionLibrary */

$this->breadcrumbs=array(
	'Function Libraries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FunctionLibrary', 'url'=>array('index')),
	array('label'=>'Manage FunctionLibrary', 'url'=>array('admin')),
);
?>

<h1>Create FunctionLibrary</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>