<?php
/* @var $this FormThemeMappingController */
/* @var $model FormThemeMapping */
/* @var $form CActiveForm */
$application_form = applicationForms::model()->findAll(array('order' => 'menu_form'));
$application_form_List = CHtml::listData($application_form, 'id', 'menu_form');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-theme-mapping-form',
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
        <?php echo $form->dropDownList($model,'form_id', $application_form_List, array('prompt' => 'Select Form')); ?>
        <?php echo $form->error($model,'application_forms_id'); ?>
    </div>

	 <div class="row">
        <?php echo $form->labelEx($model,'theme_ID'); ?>
        <?php echo $form->dropDownList($model,'theme_ID', CHtml::listData(Themes::model()->findAll(),'ID','theme_name'), array('prompt' => 'Select Theme')); ?>
        <?php echo $form->error($model,'theme_ID'); ?>
    </div>
        	<div class="row">
    <?php echo $form->labelEx($model,'controller'); ?>
    <?php
    $allowedControllers = ['departments', 'faculty', 'studentInformation', 'courseType','courses', 'themes'];
    echo $form->dropDownList($model, 'controller', array_combine($allowedControllers, $allowedControllers), ['prompt' => 'Select Controller']);
    ?>
    <?php echo $form->error($model,'controller'); ?>
</div>


	<div class="row">
    <?php echo $form->labelEx($model,'action'); ?>
    <?php echo $form->dropDownList($model, 'action', ['create' => 'create'], ['prompt' => 'Select Action']); ?>
    <?php echo $form->error($model,'action'); ?>
</div>


	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->