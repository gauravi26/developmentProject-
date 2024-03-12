<?php
/* @var $this ActionLibraryController */
/* @var $model ActionLibrary */

$this->breadcrumbs=array(
	'Action Libraries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ActionLibrary', 'url'=>array('index')),
	array('label'=>'Manage ActionLibrary', 'url'=>array('admin')),
);
?>

<h1>Create ActionLibrary</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>