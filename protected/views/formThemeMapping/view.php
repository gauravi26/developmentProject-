<?php
/* @var $this FormThemeMappingController */
/* @var $model FormThemeMapping */

$this->breadcrumbs=array(
	'Form Theme Mappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FormThemeMapping', 'url'=>array('index')),
	array('label'=>'Create FormThemeMapping', 'url'=>array('create')),
	array('label'=>'Update FormThemeMapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FormThemeMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormThemeMapping', 'url'=>array('admin')),
);
?>

<h1>View FormThemeMapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        array(
            'name' => 'form_id',
            'value' => $model->applicationForms->menu_form,
        ),
        array(
            'name' => 'theme_ID',
            'value' => $model->theme->theme_name,
        ),
        'controller',
        'action',
    ),
));
 ?>
