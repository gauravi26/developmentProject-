<?php
/* @var $this ApplicationFormsController */
/* @var $data ApplicationForms */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_form')); ?>:</b>
	<?php echo CHtml::encode($data->menu_form); ?>
	<br />


</div>