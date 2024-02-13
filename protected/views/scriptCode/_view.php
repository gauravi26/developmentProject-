<?php
/* @var $this ScriptCodeController */
/* @var $data ScriptCode */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('effects')); ?>:</b>
	<?php echo CHtml::encode($data->effects); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('css')); ?>:</b>
	<?php echo CHtml::encode($data->css); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />


</div>