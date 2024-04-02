<?php
/* @var $this EffectsController */
/* @var $model Effects */

$this->breadcrumbs=array(
	'Effects'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Effects', 'url'=>array('index')),
	array('label'=>'Create Effects', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#effects-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Effects</h1>

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
    'id'=>'effects-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id',
        array(
            'name'=>'form_id',
            'value'=>'isset($data->form->FORM_NAME) ? $data->form->FORM_NAME : "N/A"',
        ),
        array(
            'name'=>'trigger_id',
            'value'=>'isset($data->trigger->effect_trigger) ? $data->trigger->effect_trigger : "N/A"',
        ),
        array(
            'name'=>'FIELD_ID',
            'value'=>'isset($data->field->TITLE) ? $data->field->TITLE : "N/A"',
        ),
        array(
            'name'=>'effect_code_id',
            'value'=>'isset($data->effect->effects) ? $data->effect->effects : "N/A"',
        ),
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
