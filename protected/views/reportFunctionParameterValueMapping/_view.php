<?php
/* @var $this ReportFunctionParameterValueMappingController */
/* @var $data ReportFunctionParameterValueMapping */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_function_mapping_id')); ?>:</b>
	<?php echo CHtml::encode($data->report_function_mapping_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function_argument_map_id')); ?>:</b>
	<?php echo CHtml::encode($data->function_argument_map_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />


</div>