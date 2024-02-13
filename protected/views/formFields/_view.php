<?php
/* @var $this FormFieldsController */
/* @var $data FormFields */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIELD_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FIELD_ID), array('view', 'id'=>$data->FIELD_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FORM_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FORM_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->TITLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REQUIRED')); ?>:</b>
	<?php echo CHtml::encode($data->REQUIRED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('f_MATCH')); ?>:</b>
	<?php echo CHtml::encode($data->f_MATCH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('f_RANGE')); ?>:</b>
	<?php echo CHtml::encode($data->f_RANGE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ERROR_MESSAGE')); ?>:</b>
	<?php echo CHtml::encode($data->ERROR_MESSAGE); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('OTHER_VALIDATOR')); ?>:</b>
	<?php echo CHtml::encode($data->OTHER_VALIDATOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WIDGET')); ?>:</b>
	<?php echo CHtml::encode($data->WIDGET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WIDGETPARAMS')); ?>:</b>
	<?php echo CHtml::encode($data->WIDGETPARAMS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('POSITION')); ?>:</b>
	<?php echo CHtml::encode($data->POSITION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VISIBLE')); ?>:</b>
	<?php echo CHtml::encode($data->VISIBLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FORMULA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FORMULA_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INPUT_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->INPUT_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('field_condition_flag')); ?>:</b>
	<?php echo CHtml::encode($data->field_condition_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_query')); ?>:</b>
	<?php echo CHtml::encode($data->filter_query); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CRUD_VIEW')); ?>:</b>
	<?php echo CHtml::encode($data->CRUD_VIEW); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dependent_on')); ?>:</b>
	<?php echo CHtml::encode($data->dependent_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dependent_ParentCol')); ?>:</b>
	<?php echo CHtml::encode($data->dependent_ParentCol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('onchange')); ?>:</b>
	<?php echo CHtml::encode($data->onchange); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_ConnectedCol')); ?>:</b>
	<?php echo CHtml::encode($data->parent_ConnectedCol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_more')); ?>:</b>
	<?php echo CHtml::encode($data->add_more); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addMore_inRowOf')); ?>:</b>
	<?php echo CHtml::encode($data->addMore_inRowOf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upload_folder')); ?>:</b>
	<?php echo CHtml::encode($data->upload_folder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('language_id')); ?>:</b>
	<?php echo CHtml::encode($data->language_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unique_flag')); ?>:</b>
	<?php echo CHtml::encode($data->unique_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_unique_column')); ?>:</b>
	<?php echo CHtml::encode($data->parent_unique_column); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unique_combination')); ?>:</b>
	<?php echo CHtml::encode($data->unique_combination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active_language_event_table')); ?>:</b>
	<?php echo CHtml::encode($data->active_language_event_table); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active_language_event_column')); ?>:</b>
	<?php echo CHtml::encode($data->active_language_event_column); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('readonly')); ?>:</b>
	<?php echo CHtml::encode($data->readonly); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_multivalue_mapping_tableName')); ?>:</b>
	<?php echo CHtml::encode($data->form_multivalue_mapping_tableName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('multivalue_mapping_form_value')); ?>:</b>
	<?php echo CHtml::encode($data->multivalue_mapping_form_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('multivalue_mapping_data_value')); ?>:</b>
	<?php echo CHtml::encode($data->multivalue_mapping_data_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('external_field')); ?>:</b>
	<?php echo CHtml::encode($data->external_field); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('table_column_id')); ?>:</b>
	<?php echo CHtml::encode($data->table_column_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('label_note')); ?>:</b>
	<?php echo CHtml::encode($data->label_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_data_entry')); ?>:</b>
	<?php echo CHtml::encode($data->parent_data_entry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_by')); ?>:</b>
	<?php echo CHtml::encode($data->order_by); ?>
	<br />

	*/ ?>

</div>