<?php
/* @var $this ReportThemeMappingController */
/* @var $model ReportThemeMapping */

$this->breadcrumbs=array(
	'Report Theme Mappings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ReportThemeMapping', 'url'=>array('index')),
	array('label'=>'Create ReportThemeMapping', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#report-theme-mapping-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");


if (isset($data)) {
    $page = ApplicationForms::model()->findByPk($data->application_forms_id);
    
    $report = Report::model()->findByPk($data->report_id);
    
    // Corrected the syntax for accessing the model method
    $theme = ThemeforReport::model()->findByPk($data->theme_ID);
}
?>

<h1>Manage Report Theme Mappings</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'report-theme-mapping-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
            'name' => 'application_forms_id',
            'value' => '$data->applicationForms->menu_form', // Assuming 'menu_form' is a property of ApplicationForms model
        ),
        array(
            'name' => 'report_id',
            'value' => '$data->report->report_name', // Assuming 'report_name' is a property of Report model
        ),
        array(
            'name' => 'theme_ID',
            'value' => '$data->theme->theme_name', // Assuming 'theme_name' is a property of ThemeforReport model
        ),

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
