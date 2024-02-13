
<?php Yii::app()->clientScript->registerCoreScript('yiiactiveform'); ?>

<h1><?php echo "Get Faculty Deatails"; ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="http://localhost/newproject/AjaxFiles/faculty.js"></script>


</h1>
<div class="form">
<?php echo CHtml::dropDownList('faculty-list', null, 
    CHtml::listData(Faculty::model()->findAll(), 'id', 'faculty_name'), 
    array('empty'=>'Select Faculty Name')); 




 $courseTypes = array();
    $models = FacultyCourseType::model()->findAllByAttributes(array('faculty_id' =>$model->id ));
    foreach ($models as $model) {
        $courseTypeModel = CourseType::model()->findByPk($model->course_type_id);
        if ($courseTypeModel !== null) {
            $courseTypes[] = $courseTypeModel->course_type;
        }
    }
    
   
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




?>
</div>

<div class="form">
    
    <div >
    <table id="faculty-details">
        
            
    </table>
</div>

    
</div>

<div id="faculty-details">
    <!-- Faculty details will be displayed here -->
</div>
