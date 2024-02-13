<?php
/* @var $this FormFieldsController */
/* @var $model FormFields */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-fields-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FORM_ID'); ?>
		<?php echo $form->textField($model,'FORM_ID'); ?>
		<?php echo $form->error($model,'FORM_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TITLE'); ?>
		<?php echo $form->textField($model,'TITLE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'TITLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REQUIRED'); ?>
		<?php echo $form->textField($model,'REQUIRED'); ?>
		<?php echo $form->error($model,'REQUIRED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'f_MATCH'); ?>
		<?php echo $form->textField($model,'f_MATCH',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'f_MATCH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'f_RANGE'); ?>
		<?php echo $form->textField($model,'f_RANGE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'f_RANGE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ERROR_MESSAGE'); ?>
		<?php echo $form->textField($model,'ERROR_MESSAGE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ERROR_MESSAGE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OTHER_VALIDATOR'); ?>
		<?php echo $form->textArea($model,'OTHER_VALIDATOR',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'OTHER_VALIDATOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'WIDGET'); ?>
		<?php echo $form->textField($model,'WIDGET',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'WIDGET'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'WIDGETPARAMS'); ?>
		<?php echo $form->textArea($model,'WIDGETPARAMS',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'WIDGETPARAMS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'POSITION'); ?>
		<?php echo $form->textField($model,'POSITION'); ?>
		<?php echo $form->error($model,'POSITION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VISIBLE'); ?>
		<?php echo $form->textField($model,'VISIBLE'); ?>
		<?php echo $form->error($model,'VISIBLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FORMULA_ID'); ?>
		<?php echo $form->textField($model,'FORMULA_ID',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FORMULA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INPUT_TYPE'); ?>
		<?php echo $form->textField($model,'INPUT_TYPE',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'INPUT_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'field_condition_flag'); ?>
		<?php echo $form->textField($model,'field_condition_flag'); ?>
		<?php echo $form->error($model,'field_condition_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_query'); ?>
		<?php echo $form->textArea($model,'filter_query',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'filter_query'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CRUD_VIEW'); ?>
		<?php echo $form->textField($model,'CRUD_VIEW'); ?>
		<?php echo $form->error($model,'CRUD_VIEW'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dependent_on'); ?>
		<?php echo $form->textField($model,'dependent_on'); ?>
		<?php echo $form->error($model,'dependent_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dependent_ParentCol'); ?>
		<?php echo $form->textField($model,'dependent_ParentCol',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'dependent_ParentCol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'onchange'); ?>
		<?php echo $form->textField($model,'onchange'); ?>
		<?php echo $form->error($model,'onchange'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_ConnectedCol'); ?>
		<?php echo $form->textField($model,'parent_ConnectedCol',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'parent_ConnectedCol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add_more'); ?>
		<?php echo $form->textField($model,'add_more'); ?>
		<?php echo $form->error($model,'add_more'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addMore_inRowOf'); ?>
		<?php echo $form->textField($model,'addMore_inRowOf'); ?>
		<?php echo $form->error($model,'addMore_inRowOf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upload_folder'); ?>
		<?php echo $form->textField($model,'upload_folder',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'upload_folder'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language_id'); ?>
		<?php echo $form->textField($model,'language_id'); ?>
		<?php echo $form->error($model,'language_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unique_flag'); ?>
		<?php echo $form->textField($model,'unique_flag'); ?>
		<?php echo $form->error($model,'unique_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_unique_column'); ?>
		<?php echo $form->textField($model,'parent_unique_column',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'parent_unique_column'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unique_combination'); ?>
		<?php echo $form->textField($model,'unique_combination',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'unique_combination'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active_language_event_table'); ?>
		<?php echo $form->textField($model,'active_language_event_table',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'active_language_event_table'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active_language_event_column'); ?>
		<?php echo $form->textField($model,'active_language_event_column',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'active_language_event_column'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'readonly'); ?>
		<?php echo $form->textField($model,'readonly'); ?>
		<?php echo $form->error($model,'readonly'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'form_multivalue_mapping_tableName'); ?>
		<?php echo $form->textField($model,'form_multivalue_mapping_tableName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'form_multivalue_mapping_tableName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'multivalue_mapping_form_value'); ?>
		<?php echo $form->textField($model,'multivalue_mapping_form_value',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'multivalue_mapping_form_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'multivalue_mapping_data_value'); ?>
		<?php echo $form->textField($model,'multivalue_mapping_data_value',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'multivalue_mapping_data_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'external_field'); ?>
		<?php echo $form->textField($model,'external_field'); ?>
		<?php echo $form->error($model,'external_field'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'table_column_id'); ?>
		<?php echo $form->textField($model,'table_column_id'); ?>
		<?php echo $form->error($model,'table_column_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'label_note'); ?>
		<?php echo $form->textField($model,'label_note',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'label_note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_data_entry'); ?>
		<?php echo $form->textField($model,'parent_data_entry'); ?>
		<?php echo $form->error($model,'parent_data_entry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_by'); ?>
		<?php echo $form->textField($model,'order_by',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'order_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->