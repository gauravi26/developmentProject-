<?php
/* @var $this EffectsController */
/* @var $data Effects */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_id')); ?>:</b>
	<?php echo CHtml::encode($data->form_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trigger_id')); ?>:</b>
	<?php echo CHtml::encode($data->trigger_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIELD_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FIELD_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('effect_code_id')); ?>:</b>
	<?php echo CHtml::encode($data->effect_code_id); ?>
	<br />


</div>