<?php
/* @var $this ReportFunctionMappingController */
/* @var $data ReportFunctionMapping */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('application_forms_id')); ?>:</b>
	<?php echo CHtml::encode($data->application_forms_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_id')); ?>:</b>
	<?php echo CHtml::encode($data->report_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_library_id')); ?>:</b>
	<?php echo CHtml::encode($data->function_library_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_columns')); ?>:</b>
	<?php echo CHtml::encode($data->report_columns); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_row')); ?>:</b>
	<?php echo CHtml::encode($data->report_row); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fetched_function_to_call')); ?>:</b>
	<?php echo CHtml::encode($data->fetched_function_to_call); ?>
	<br />


</div>