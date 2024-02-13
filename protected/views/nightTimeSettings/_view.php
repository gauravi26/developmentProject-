<?php
/* @var $this NightTimeSettingsController */
/* @var $data NightTimeSettings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nightStart')); ?>:</b>
	<?php echo CHtml::encode($data->nightStart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nightEnd')); ?>:</b>
	<?php echo CHtml::encode($data->nightEnd); ?>
	<br />


</div>