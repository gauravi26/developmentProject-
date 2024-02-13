<?php
/* @var $this StudentInformationController */
/* @var $model StudentInformation */

$this->breadcrumbs=array(
	'Student Informations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List StudentInformation', 'url'=>array('index')),
	array('label'=>'Create StudentInformation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#student-information-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Student Informations</h1>

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
	'id'=>'student-information-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'student_id',
		'first_name',
		'last_name',
		'date_of_birth',
		'address',
		'phone_number',
		/*
		'email_address',
		'department_id',
		'course_type_id',
		'course_id',
		'major',
		'academic_status',
		'theme_ID',
		'emergency_contact_name',
		'emergency_contact_phone',
		'emergency_contact_relationship',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
