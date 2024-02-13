<?php
/* @var $this FormElementThemeMappingController */
/* @var $model FormElementThemeMapping */
/* @var $form CActiveForm */

$form_elements = FormElement::model()->findAll(array('order' => 'element_name'));
$form_element_List = CHtml::listData($form_elements, 'id', 'element_name');
$application_form = applicationForms::model()->findAll(array('order' => 'menu_form'));
$application_form_List = CHtml::listData($application_form, 'id', 'menu_form');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-element-theme-mapping-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	 <div class="row">
        <?php echo $form->labelEx($model,'application_forms_id'); ?>
        <?php echo $form->dropDownList($model,'application_forms_id', $application_form_List, array('prompt' => 'Select Form')); ?>
        <?php echo $form->error($model,'application_forms_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'form_element_id'); ?>
        <?php echo $form->dropDownList($model,'form_element_id', $form_element_List, array('prompt' => 'Select Element')); ?>
        <?php echo $form->error($model,'form_element_id'); ?>
    </div>


	 <div class="row">
        <?php echo $form->labelEx($model,'theme_ID'); ?>
        <?php echo $form->dropDownList($model,'theme_ID', CHtml::listData(Themes::model()->findAll(),'ID','theme_name'), array('prompt' => 'Select Theme')); ?>
        <?php echo $form->error($model,'theme_ID'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->