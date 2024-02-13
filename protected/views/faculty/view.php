<?php
/* @var $this FacultyController */
/* @var $model Faculty */

$this->breadcrumbs=array(
	'Faculties'=>array('index'),
	$model->id,
);
$departments = Departments::model()->findAll(array('order' => 'department_name'));
$departmentList = CHtml::listData($departments, 'id', 'department_name');
$courses = Courses::model()->findAll(array('order' => 'course_name'));
$courseList = CHtml::listData($courses, 'id', 'course_name');


$this->menu=array(
	array('label'=>'List Faculties', 'url'=>array('index')),
	array('label'=>'Create Faculty', 'url'=>array('create')),
	array('label'=>'Update Faculty', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Faculty', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Faculties', 'url'=>array('admin')),
);
?>
<h1><?php echo CHtml::encode($model->id); ?></h1>




<h1>View Faculty #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'faculty_code',
		'faculty_name',
		
               
			'department_id', 
			
			'course_id' ,
			'email',
			'phone' ,
			'address',
	),
)); 





 $courseTypes = array();
    $models = FacultyCourseType::model()->findAllByAttributes(array('faculty_id' =>$model->id ));
    foreach ($models as $model) {
        $courseTypeModel = CourseType::model()->findByPk($model->course_type_id);
        if ($courseTypeModel !== null) {
            $courseTypes[] = $courseTypeModel->course_type;
        }
    }
    
//    echo $courseTypes;
//    die();
?>
<table>
  <thead>
    <tr>
      <th>Course Types</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($courseTypes as $type) : ?>
      <tr>
        <td><?php echo $type; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>




