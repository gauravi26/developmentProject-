<?php
/* @var $this FunctionLibraryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Function Libraries',
);

$this->menu=array(
	array('label'=>'Create FunctionLibrary', 'url'=>array('create')),
	array('label'=>'Manage FunctionLibrary', 'url'=>array('admin')),
);
?>

<h1>Function Libraries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
