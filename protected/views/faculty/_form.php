<style>
    
/*    #faculty_btn{background-color:green} #faculty_btn{background-color:green}*/
</style>
    <?php
/* @var $this FacultyController */
/* @var $model Faculty */
/* @var $form CActiveForm */
$departments = Departments::model()->findAll(array('order' => 'department_name'));
$departmentList = CHtml::listData($departments, 'id', 'department_name');
$courses = Courses::model()->findAll(array('order' => 'course_name'));
$courseList = CHtml::listData($courses, 'id', 'course_name');

$controller = Yii::app()->getController();
//  print_r($controller);
// die();
    $actionId = $controller->getAction()->getId();
    $controllerId = $controller->getId();


 echo CHtml::hiddenField('controllerId',$controllerId); 
 echo CHtml::hiddenField('actionId',$actionId); 




?>

<!DOCTYPE>
<div class="form" id='facultyForm' >
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'faculty-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    )); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" id="faculty_name">
		<?php echo $form->labelEx($model,'faculty_name'); ?>
		<?php echo $form->textField($model,'faculty_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'faculty_name'); ?>
	</div>

	<div class="row"id="faculty_code">
		<?php echo $form->labelEx($model,'faculty_code'); ?>
		<?php echo $form->textField($model,'faculty_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'faculty_code'); ?>
	</div>

	<div class="row" id="faculty_department_id">
		<?php echo $form->labelEx($model,'department_id'); ?>
                <?php echo $form->dropDownList($model, 'department_id', $departmentList, array('empty'=>'Select Department')); ?>
		<?php echo $form->error($model,'department_id'); ?>
	</div>

<div class="row" id="faculty_course_type">
    Course Type <br> <?php  //echo CHtml::labelEx('course_type_id'); ?>
	<?php 
		// Get the list of course types from the database
		$courseTypes = CourseType::model()->findAll();
		
		// Loop through the course types and create a checkbox for each one
		foreach($courseTypes as $type) {
			echo CHtml::checkBox('course_type_id[]','', array('value' => $type->id, 'uncheckValue' => null)) . ' ' . $type->course_type . '<br>';
		}
	?>
	<?php echo $form->error($model,'course_type_id'); ?>
</div>


	<div class="row" id="faculty_course">
		<?php echo $form->labelEx($model,'course_id'); ?>
                <?php echo $form->dropDownList($model, 'course_id',$courseList, array('empty'=>'Select Course')); ?>
		<?php echo $form->error($model,'course_id'); ?>
	</div>

	<div class="row" id="faculty_email">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row" id="faculty_phone">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row" id="faculty_address">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>
            


	<div class="row buttons" id="faculty_btn"  >
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
        <?php   
       $controller = Yii::app()->getController();
    $actionId = $controller->getAction()->getId();
    $controllerId = $controller->getId();

    $mapping = FormThemeMapping::model()->find(
        'controller = :controller AND action = :action',
        array(':controller' => $controllerId, ':action' => $actionId)
    );
    //var_dump($mapping);
    if ($mapping !== null) {
        $formId = $mapping->form_id;
        $themeId = $mapping->theme_ID;

        // Fetch and apply the theme using the $themeId
        $theme = Themes::model()->findByPk($themeId);

        // Apply the theme logic here
        // ...
    } else {
        // Handle the case when no mapping is found for the current controller and action
        // ...
    
    }?>

  
       <script>
//  document.addEventListener('DOMContentLoaded', function () {
//    var percentageElements = document.querySelectorAll('table td:nth-child(8)');
//    percentageElements.forEach(function (element) {
//      var percentage = parseInt(element.textContent);
//      if (percentage >= 45) {
//        element.style.setProperty('color', 'green', 'important');
//      } else {
//        element.style.setProperty('color', 'red', 'important');
//      }
//    });
//  });
</script> 
      
</div><!-- form -->






   