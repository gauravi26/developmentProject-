<?php
/* @var $this FormElementCssPropertiesThemeMappingController */
/* @var $data FormElementCssPropertiesThemeMapping */
if (isset($data)) {
    // Fetch the department model based on the department_id
    $themeName = Themes::model()->findByPk($data->theme_ID);
    $formElementCssPropertiesName = FormElementCssPropertiesThemeMapping::model()->findByPk($data->form_element_css_properties_id);
    
    // Fetch the course model based on the course_id

    // Display the department name and course name
  //  echo "<b>" . CHtml::encode($data->getAttributeLabel('theme_ID')) . ":</b> " . CHtml::encode($themeName->theme_name) . "<br />";
}
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo "<b>" . CHtml::encode($data->getAttributeLabel('theme_ID')) . ":</b> " . CHtml::encode($themeName->theme_name) . "<br />";
 ?></b>

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_element_css_properties_id')); ?>:</b>
	<?php echo CHtml::encode($data->form_element_css_properties_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />


</div>