<?php
/* @var $this ActionLibraryController */
/* @var $model ActionLibrary */

$this->breadcrumbs=array(
	'Action Libraries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ActionLibrary', 'url'=>array('index')),
	array('label'=>'Create ActionLibrary', 'url'=>array('create')),
	array('label'=>'View ActionLibrary', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ActionLibrary', 'url'=>array('admin')),
);
?>

<h1>Update ActionLibrary <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>