<?php
/* @var $this SelectedThemeController */
/* @var $data SelectedTheme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theme_ID')); ?>:</b>
	<?php echo CHtml::encode($data->theme_ID); ?>
	<br />


</div>