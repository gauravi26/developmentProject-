<?php
/* @var $this FacultyColumnThemeMappingController */
/* @var $model FacultyColumnThemeMapping */
/* @var $form CActiveForm */

// Get the column names of the faculty table
$facultyColumns = Yii::app()->db->getSchema()->getTable('faculty')->getColumnNames();
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'faculty-column-theme-mapping-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

  

    <div class="row">
        <?php echo $form->labelEx($model,'theme_ID'); ?>
        <?php echo $form->dropDownList($model,'theme_ID', CHtml::listData(Themes::model()->findAll(),'ID','theme_name'), array('prompt' => 'Select Theme')); ?>
        <?php echo $form->error($model,'theme_ID'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'faculty_column_name'); ?>
        <?php echo $form->dropDownList($model,'column_name', array_combine($facultyColumns, $facultyColumns), array('prompt' => 'Select Faculty Column')); ?>
        <?php echo $form->error($model,'faculty_column_name'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
