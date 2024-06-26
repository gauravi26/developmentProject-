<?php
/* @var $this FormThemeMappingController */
/* @var $model FormThemeMapping */

$this->breadcrumbs=array(
	'Form Theme Mappings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FormThemeMapping', 'url'=>array('index')),
	array('label'=>'Create FormThemeMapping', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#form-theme-mapping-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Form Theme Mappings</h1>

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
    'id'=>'form-theme-mapping-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
   'columns'=>array(
    'id',
    array(
        'name' => 'form_id',
        'value' => '$data->applicationForms->menu_form',
        'filter' => CHtml::listData(ApplicationForms::model()->findAll(), 'form_id', 'menu_form'),
    ),
    array(
        'name' => 'theme_name',
        'value' => '$data->theme->theme_name',
        'filter' => CHtml::listData(Themes::model()->findAll(), 'id', 'theme_name'),
    ),
    'controller',
    'action',
    array(
        'class'=>'CButtonColumn',
        'buttons' => array(
            'customDelete' => array(
                'label' => 'Custom Delete', // Custom label for the button
                'url' => 'Yii::app()->controller->createUrl("customDelete", array("id"=>$data->id))', // URL to trigger the actionCustomDelete function
            ),
        ),
        'template' => '{update} {customDelete}', // Define which buttons to display and in what order
    ),
),

)); ?>
