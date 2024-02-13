<?php
/* @var $this ReportThemeMappingController */
/* @var $model ReportThemeMapping */
/* @var $form CActiveForm */

$application_form = applicationForms::model()->findAll(array('order' => 'menu_form'));
$application_form_List = CHtml::listData($application_form, 'id', 'menu_form');

$report = Report::model()->findAll(array('order' => 'report_name'));
$reportList = CHtml::listData($report, 'id', 'report_name');

$themes = ThemeForReport::model()->findAll(array(
    'condition' => 'reference_id != 0', // Exclude records with reference_id = 0
    'order' => 'theme_name'
));
$themeList = CHtml::listData($themes, 'reference_id', 'theme_name');

$uniqueThemes = array_unique($themeList);


?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-theme-mapping-form',
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
        <?php echo $form->dropDownList($model,'application_forms_id', $application_form_List, array('prompt' => 'Select Page')); ?>
		<?php echo $form->error($model,'application_forms_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_id'); ?>
        <?php echo $form->dropDownList($model,'report_id', $reportList, array('prompt' => 'Select Report')); ?>
		<?php echo $form->error($model,'report_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'theme_ID'); ?>
		<?php echo $form->dropDownList($model,'theme_ID', $uniqueThemes,array('prompt' => 'Select Theme')); ?>
		<?php echo $form->error($model,'theme_ID'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->