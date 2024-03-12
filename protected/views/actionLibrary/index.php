<?php
/* @var $this ActionLibraryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Action Libraries',
);

$this->menu=array(
	array('label'=>'Create ActionLibrary', 'url'=>array('create')),
	array('label'=>'Manage ActionLibrary', 'url'=>array('admin')),
);
?>

<h1>Action Libraries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
