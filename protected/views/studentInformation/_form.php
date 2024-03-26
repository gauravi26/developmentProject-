
<?php
$baseUrl = Yii::app()->baseUrl; 

/* @var $this StudentInformationController */
/* @var $model StudentInformation */
/* @var $form CActiveForm */

$departments = Departments::model()->findAll(array('order'=> 'department_name'));
$departmentList = CHtml::listData($departments,'id', 'department_name');
$courses = Courses::model()->findAll(array('order' => 'course_name'));
$courseList = CHtml::listData($courses, 'id', 'course_name');
$courseTypes = CourseType::model()->findAll(array('order' => 'course_type'));
$courseTypeList = CHtml::listData($courseTypes, 'id', 'course_type');
$themes = Themes::model()->findAll(array('order' => 'theme_name'));
$themeList = CHtml::listData($themes, 'ID', 'theme_name');

$controller = Yii::app()->getController();
 
    $actionId = $controller->getAction()->getId();
    $controllerId = $controller->getId();
//    print_r($controllerId);
//        print_r($actionId);
//
//die();

?>
<?php echo CHtml::hiddenField('controllerId',$controllerId); ?>
<?php echo CHtml::hiddenField('actionId',$actionId); ?>


<!-- Rest of your form elements -->

 
<div class="form" id="studentForm">
    

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-information-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
    

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
    <div class="row">
        <?php echo $form->labelEx($model, 'student_id'); ?>
        <?php echo $form->textField($model, 'student_id', array('id' => 'field_23')); ?>
        <?php echo $form->error($model, 'student_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'first_name'); ?>
        <?php echo $form->textField($model, 'first_name', array('id' => 'field_24', 'size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'first_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'last_name'); ?>
        <?php echo $form->textField($model, 'last_name', array('id' => 'field_25', 'size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'last_name'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'date_of_birth'); ?>
        <?php echo $form->textField($model, 'date_of_birth', array('id' => 'field_26', 'type' => 'date')); ?>
        <?php echo $form->error($model, 'date_of_birth'); ?>
    </div>

    

    <div class="row">
        <?php echo $form->labelEx($model, 'address'); ?>
        <?php echo $form->textField($model, 'address', array('id' => 'field_27', 'size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'address'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'phone_number'); ?>
        <?php echo $form->textField($model, 'phone_number', array('id' => 'field_28', 'size' => 20, 'maxlength' => 20)); ?>
        <?php echo $form->error($model, 'phone_number'); ?>
    </div>
        
<div class="row">
    <?php echo $form->labelEx($model, 'email_address'); ?>
    <?php echo $form->textField($model, 'email_address', array('id' => 'field_29', 'size' => 60, 'maxlength' => 255)); ?>
    <?php echo $form->error($model, 'email_address'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'student_department_id'); ?>
    <?php echo $form->dropDownList($model, 'department_id', $departmentList, array('id' => 'field_30', 'empty' => 'Select Department')); ?>
    <?php echo $form->error($model, 'department_id'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'student_course_type_id'); ?>
    <?php echo $form->dropDownList($model, 'course_type_id', $courseTypeList, array('id' => 'field_31', 'empty' => 'Select Course Type')); ?>
    <?php echo $form->error($model, 'course_type_id'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'student_course_id'); ?>
    <?php echo $form->dropDownList($model, 'course_id', $courseList, array('id' => 'field_32', 'empty' => 'Select Course Name ')); ?>
    <?php echo $form->error($model, 'course_id'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'major'); ?>
    <?php echo $form->textField($model, 'major', array('id' => 'field_33', 'size' => 50, 'maxlength' => 50)); ?>
    <?php echo $form->error($model, 'major'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'academic_status'); ?>
    <?php echo $form->textField($model, 'academic_status', array('id' => 'field_34', 'size' => 50, 'maxlength' => 50)); ?>
    <?php echo $form->error($model, 'academic_status'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'theme_ID'); ?>
    <?php echo $form->dropDownList($model, 'theme_ID', $themeList, array('id' => 'field_35', 'empty' => 'Select Theme')); ?>
    <?php echo $form->error($model, 'theme_ID'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'emergency_contact_name'); ?>
    <?php echo $form->textField($model, 'emergency_contact_name', array('id' => 'field_36', 'size' => 60, 'maxlength' => 100)); ?>
    <?php echo $form->error($model, 'emergency_contact_name'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'emergency_contact_phone'); ?>
    <?php echo $form->textField($model, 'emergency_contact_phone', array('id' => 'field_37', 'size' => 20, 'maxlength' => 20)); ?>
    <?php echo $form->error($model, 'emergency_contact_phone'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'emergency_contact_relationship'); ?>
    <?php echo $form->textField($model, 'emergency_contact_relationship', array('id' => 'field_38', 'size' => 50, 'maxlength' => 50)); ?>
    <?php echo $form->error($model, 'emergency_contact_relationship'); ?>
</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('id' => "field_39")); ?>
	</div>

<?php $this->endWidget(); ?>
   

   

</div><!-- form -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
$(document).ready(function() {
  // Event handler for page load
  $(window).on('load', function() {
    var controllerName = $("#controllerId").val();
    var actionName = $("#actionId").val();

    // Make the AJAX request to fetch CSS properties
    $.ajax({
      url: 'index.php?r=formtheme/applyThemeGeneralTheme',
      type: 'GET',
      data: { controller: controllerName, action: actionName },
      dataType: 'text',
      success: function(response) {
        // Handle the success response here
        // You can access the returned CSS string from the 'response' variable

        // Apply the CSS styles to the form
        $('form').css('cssText', response);
        // Apply CSS to Page and Main Menu 
//        $('#page').css('cssText', response);
//         $('#mainmenu').css('cssText', response);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        // Handle the error case here
        console.error('AJAX request failed:', textStatus, errorThrown);
      }
    });
  });
});
</script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--  <script src="http://localhost/testproject/AjaxFiles/ApplyCSStoElements.js"></script>-->
<!--         <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/ApplythemeonformId.js"></script>-->



<!--  <script>$(document).ready(function() { $('#field_39').hover(function() { var element = $(this); element.addClass('blink'); setTimeout(function() { element.removeClass('blink'); }, 1000); }); });</script>-->