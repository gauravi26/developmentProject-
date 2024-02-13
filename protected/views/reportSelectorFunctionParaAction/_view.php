<?php
/* @var $this ReportSelectorFunctionParaActionController */
/* @var $data ReportSelectorFunctionParaAction */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_id')); ?>:</b>
	<?php echo CHtml::encode($data->report_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_column')); ?>:</b>
	<?php echo CHtml::encode($data->report_column); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_row')); ?>:</b>
	<?php echo CHtml::encode($data->report_row); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_library_id')); ?>:</b>
	<?php echo CHtml::encode($data->function_library_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_library_parameter')); ?>:</b>
	<?php echo CHtml::encode($data->function_library_parameter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('action_id')); ?>:</b>
	<?php echo CHtml::encode($data->action_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('script_to_call')); ?>:</b>
	<?php echo CHtml::encode($data->script_to_call); ?>
	<br />

	*/ ?>

</div>