<?php
/* @var $this ReportSelectorFunctionMappingController */
/* @var $data ReportSelectorFunctionMapping */
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


</div>