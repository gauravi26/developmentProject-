<?php
/* @var $this ReportThemeMappingController */
/* @var $data ReportThemeMapping */

if (isset($data)) {
    $page = ApplicationForms::model()->findByPk($data->application_forms_id);
    
    $report = Report::model()->findByPk($data->report_id);
    
    // Corrected the syntax for accessing the model method
    $theme = ThemeforReport::model()->findByPk($data->theme_ID);
}

?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo "<b>" . CHtml::encode($data->getAttributeLabel('application_forms_id')) . ":</b> " . CHtml::encode($page->menu_form) . "<br />";
 ?></b>

	<b><?php echo "<b>" . CHtml::encode($data->getAttributeLabel('report_id')) . ":</b> " . CHtml::encode($report->report_name) . "<br />";
 ?></b>

        <b><?php echo "<b>" . CHtml::encode($data->getAttributeLabel('theme_ID')) . ":</b> " . CHtml::encode($theme->theme_name) . "<br />";
 ?></b>
	


</div>