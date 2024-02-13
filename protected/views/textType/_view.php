<?php
/* @var $this TextTypeController */
/* @var $data TextType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_type')); ?>:</b>
	<?php echo CHtml::encode($data->text_type); ?>
	<br />


</div>