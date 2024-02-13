<?php
/* @var $this AddressController */
/* @var $data Address */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('plotno')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->plotno), array('view', 'id'=>$data->plotno)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />


</div>