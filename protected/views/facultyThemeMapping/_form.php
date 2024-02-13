<?php
/* @var $this FacultyThemeMappingController */
/* @var $model FacultyThemeMapping */
/* @var $form CActiveForm */
$faculty = Faculty:: model()->findAll(array('order'=>'faculty_name'));
$facultyList = CHtml::listData($faculty, 'id', 'faculty_name');
$departments = Departments::model()->findAll(array('order' => 'department_name'));
$departmentList = CHtml::listData($departments, 'id', 'department_name');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faculty-theme-mapping-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'faculty_id'); ?>
                <?php echo $form->dropDownList($model, 'faculty_id', $facultyList, array('empty'=>'Select Faculty')); ?>
		<?php echo $form->error($model,'faculty_id'); ?>
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