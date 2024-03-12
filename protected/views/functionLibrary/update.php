<?php
/* @var $this FunctionLibraryController */
/* @var $model FunctionLibrary */

$this->breadcrumbs=array(
	'Function Libraries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FunctionLibrary', 'url'=>array('index')),
	array('label'=>'Create FunctionLibrary', 'url'=>array('create')),
	array('label'=>'View FunctionLibrary', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FunctionLibrary', 'url'=>array('admin')),
);
?>

<h1>Update FunctionLibrary <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>