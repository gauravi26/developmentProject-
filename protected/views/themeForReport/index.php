<?php
/* @var $this ThemeForReportController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Theme For Reports',
);

$this->menu=array(
	array('label'=>'Create ThemeForReport', 'url'=>array('create')),
	array('label'=>'Manage ThemeForReport', 'url'=>array('admin')),
);
?>

<h1>Theme For Reports</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
