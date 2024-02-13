<?php
/* @var $this FormThemeMappingController */
/* @var $data FormThemeMapping */

$themeName = null;
$formName = null;

if (isset($data)) {
    // Fetch the department model based on the department_id
    $themeName = Themes::model()->findByPk($data->theme_ID);
    $formName = ApplicationForms::model()->findByPk($data->form_id);
    
    // Fetch the course model based on the course_id

    // Display the department name and course name
  //  echo "<b>" . CHtml::encode($data->getAttributeLabel('theme_ID')) . ":</b> " . CHtml::encode($themeName->theme_name) . "<br />";
}
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo "<b>" . CHtml::encode($data->getAttributeLabel('form_id')) . ":</b> " . ($formName ? CHtml::encode($formName->menu_form) : 'N/A') . "<br />"; ?></b>

    <b><?php echo "<b>" . CHtml::encode($data->getAttributeLabel('theme_ID')) . ":</b> " . ($themeName ? CHtml::encode($themeName->theme_name) : 'N/A') . "<br />"; ?></b>

    <b><?php echo CHtml::encode($data->getAttributeLabel('controller')); ?>:</b>
    <?php echo CHtml::encode($data->controller); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('action')); ?>:</b>
    <?php echo CHtml::encode($data->action); ?>
    <br />

</div>
