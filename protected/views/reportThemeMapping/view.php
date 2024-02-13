<?php
/* @var $this ReportThemeMappingController */
/* @var $model ReportThemeMapping */

$this->breadcrumbs=array(
	'Report Theme Mappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ReportThemeMapping', 'url'=>array('index')),
	array('label'=>'Create ReportThemeMapping', 'url'=>array('create')),
	array('label'=>'Update ReportThemeMapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ReportThemeMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ReportThemeMapping', 'url'=>array('admin')),
);
?>

<h1>View ReportThemeMapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
            'name' => 'application_forms_id',
            'value' => $model->applicationForms->menu_form, // Assuming 'menu_form' is a property of ApplicationForms model
        ),
        array(
            'name' => 'report_id',
            'value' => $model->report->report_name, // Assuming 'report_name' is a property of Report model
        ),
        array(
            'name' => 'theme_ID',
            'value' => $model->theme->theme_name, // Assuming 'theme_name' is a property of ThemeforReport model
        ),
	),
)); ?>
