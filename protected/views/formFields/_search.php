<?php
/* @var $this FormFieldsController */
/* @var $model FormFields */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FIELD_ID'); ?>
		<?php echo $form->textField($model,'FIELD_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FORM_ID'); ?>
		<?php echo $form->textField($model,'FORM_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TITLE'); ?>
		<?php echo $form->textField($model,'TITLE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REQUIRED'); ?>
		<?php echo $form->textField($model,'REQUIRED'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'f_MATCH'); ?>
		<?php echo $form->textField($model,'f_MATCH',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'f_RANGE'); ?>
		<?php echo $form->textField($model,'f_RANGE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ERROR_MESSAGE'); ?>
		<?php echo $form->textField($model,'ERROR_MESSAGE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OTHER_VALIDATOR'); ?>
		<?php echo $form->textArea($model,'OTHER_VALIDATOR',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'WIDGET'); ?>
		<?php echo $form->textField($model,'WIDGET',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'WIDGETPARAMS'); ?>
		<?php echo $form->textArea($model,'WIDGETPARAMS',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'POSITION'); ?>
		<?php echo $form->textField($model,'POSITION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VISIBLE'); ?>
		<?php echo $form->textField($model,'VISIBLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FORMULA_ID'); ?>
		<?php echo $form->textField($model,'FORMULA_ID',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INPUT_TYPE'); ?>
		<?php echo $form->textField($model,'INPUT_TYPE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'field_condition_flag'); ?>
		<?php echo $form->textField($model,'field_condition_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_query'); ?>
		<?php echo $form->textArea($model,'filter_query',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CRUD_VIEW'); ?>
		<?php echo $form->textField($model,'CRUD_VIEW'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dependent_on'); ?>
		<?php echo $form->textField($model,'dependent_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dependent_ParentCol'); ?>
		<?php echo $form->textField($model,'dependent_ParentCol',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'onchange'); ?>
		<?php echo $form->textField($model,'onchange'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_ConnectedCol'); ?>
		<?php echo $form->textField($model,'parent_ConnectedCol',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'add_more'); ?>
		<?php echo $form->textField($model,'add_more'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'addMore_inRowOf'); ?>
		<?php echo $form->textField($model,'addMore_inRowOf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'upload_folder'); ?>
		<?php echo $form->textField($model,'upload_folder',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'language_id'); ?>
		<?php echo $form->textField($model,'language_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unique_flag'); ?>
		<?php echo $form->textField($model,'unique_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_unique_column'); ?>
		<?php echo $form->textField($model,'parent_unique_column',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unique_combination'); ?>
		<?php echo $form->textField($model,'unique_combination',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active_language_event_table'); ?>
		<?php echo $form->textField($model,'active_language_event_table',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active_language_event_column'); ?>
		<?php echo $form->textField($model,'active_language_event_column',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'readonly'); ?>
		<?php echo $form->textField($model,'readonly'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'form_multivalue_mapping_tableName'); ?>
		<?php echo $form->textField($model,'form_multivalue_mapping_tableName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'multivalue_mapping_form_value'); ?>
		<?php echo $form->textField($model,'multivalue_mapping_form_value',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'multivalue_mapping_data_value'); ?>
		<?php echo $form->textField($model,'multivalue_mapping_data_value',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'external_field'); ?>
		<?php echo $form->textField($model,'external_field'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'table_column_id'); ?>
		<?php echo $form->textField($model,'table_column_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'label_note'); ?>
		<?php echo $form->textField($model,'label_note',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_data_entry'); ?>
		<?php echo $form->textField($model,'parent_data_entry'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_by'); ?>
		<?php echo $form->textField($model,'order_by',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->