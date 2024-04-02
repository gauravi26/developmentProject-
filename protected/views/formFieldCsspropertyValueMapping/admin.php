<?php
/* @var $this FormFieldCsspropertyValueMappingController */
/* @var $model FormFieldCsspropertyValueMapping */

$this->breadcrumbs=array(
    'Form Field Cssproperty Value Mappings'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label'=>'List FormFieldCsspropertyValueMapping', 'url'=>array('index')),
    array('label'=>'Create FormFieldCsspropertyValueMapping', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $('#form-field-cssproperty-value-mapping-grid').yiiGridView('update', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h1>Manage Form Field Cssproperty Value Mappings</h1>

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
    'id'=>'form-field-cssproperty-value-mapping-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id',
        array(
            'name'=>'form_id',
            'value'=>'$data->form->menu_form',
            'filter'=>CHtml::listData(ApplicationForms::model()->findAll(), 'form_id', 'menu_form'),
        ),
        array(
            'name'=>'field_id',
            'value'=>'$data->field->TITLE', // Update to use TITLE property
            'filter'=>CHtml::listData(FormFields::model()->findAll(), 'field_id', 'TITLE'), // Update filter accordingly
        ),
        array(
            'name'=>'css_property_id',
            'value'=>'$data->cssProperty->property_name',
            'filter'=>CHtml::listData(CssProperties::model()->findAll(), 'css_property_id', 'property_name'),
        ),
        'value',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
            'buttons'=>array(
                'update'=>array(
                    'url'=>'Yii::app()->createUrl("formFieldCsspropertyValueMapping/update", array("id"=>$data->id))',
                ),
                'delete'=>array(
                    'url'=>'Yii::app()->createUrl("formFieldCsspropertyValueMapping/customDelete")',
                    'options'=>array(
                        'class'=>'delete', // You can add custom classes for styling
                    ),
                ),
            ),
        ),
    ),
)); ?>
