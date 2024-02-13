<?php
/* @var $this FacultyColumnThemeMappingController */
/* @var $data FacultyColumnThemeMapping */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('column_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->column_name), array('view', 'id'=>$data->column_name)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theme_ID')); ?>:</b>
	<?php echo CHtml::encode($data->theme_ID); ?>
	<br />


</div>