<?php
$this->breadcrumbs=array(
    'Themes'=>array('index'),
    'Delete',
);

$this->menu=array(
    array('label'=>'List Theme', 'url'=>array('index')),
    array('label'=>'Manage Theme', 'url'=>array('admin')),
);
?>

<h1>Delete Theme</h1>

<p>Are you sure you want to delete this theme?</p>

<?php echo CHtml::beginForm(Yii::app()->createUrl('themes/customdelete', array('id' => $model->ID)), 'post'); ?>

<?php echo CHtml::hiddenField('confirm', 'yes'); ?>

<?php echo CHtml::submitButton('Delete'); ?>

<?php echo CHtml::endForm(); ?>
