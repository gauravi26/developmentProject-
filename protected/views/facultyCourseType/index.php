<?php
/* @var $this FacultyCourseTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faculty Course Types',
);

$this->menu=array(
	array('label'=>'Create FacultyCourseType', 'url'=>array('create')),
	array('label'=>'Manage FacultyCourseType', 'url'=>array('admin')),
);
?>

<h1>Faculty Course Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
