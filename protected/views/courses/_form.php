<style>

   
  
 
  .span-19
  {
/*background-image: url("images/college.jpg");*/
  }
</style>

<?php
/* @var $this CoursesController */
/* @var $model Courses */
/* @var $form CActiveForm */
//$baseUrl = Yii::app()->baseUrl; 

$departments = Departments::model()->findAll(array('order' => 'department_name'));
$departmentList = CHtml::listData($departments, 'id', 'department_name');
//$coursetype= CourseType::model()->findAll(array('order'=> 'course_type'));

//$CourseType = CHtml::listData($course_type, 'id', 'course_type_id');
// Assuming the `applyThemeToForms()` function is defined in the same class

// Call the function to generate the CSS string
$controller = Yii::app()->getController();
 
    $actionId = $controller->getAction()->getId();
    $controllerId = $controller->getId();
 //echo CHtml::textField('controllerId',$controllerId); 
//echo CHtml::textField('actionId',$actionId); 


?>



<div class="form" enctype="multipart/form-data" id='coursesForm'>
    
        <div class="form form-with-background">
    <!-- Content goes here -->




            <?php echo CHtml::hiddenField('controllerId',$controllerId); ?>
<?php echo CHtml::hiddenField('actionId',$actionId); ?>

<?php Yii::app()->clientScript->registerCoreScript('yiiactiveform'); ?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'courses-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<!--            <input type="text" id="baseUrl" name="baseUrl" value="<?php //echo $baseUrl?>">-->


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <?php echo $form->labelEx($model, 'course_name'); ?>
    <?php echo $form->textField($model, 'course_name', array('size' => 60, 'maxlength' => 255, 'id' => 'course_name')); ?>
    <?php echo $form->error($model, 'course_name'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'course_link'); ?>
    <?php echo $form->textField($model, 'course_link', array('size' => 60, 'maxlength' => 255, 'id' => 'course_link')); ?>
    <?php echo $form->error($model, 'course_link'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'department_id'); ?>
    <?php echo $form->dropDownList($model, 'department_id', $departmentList, array('empty' => 'Select Department', 'id' => 'course_page_department_id')); ?>
    <?php echo $form->error($model, 'department_id'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'course_type_id'); ?>
    <?php
        // get the list of course types
        $courseTypes = CourseType::model()->findAll();
        $courseTypeList = CHtml::listData($courseTypes, 'id', 'course_type');
        
        // display the radio buttons for course types
        foreach($courseTypeList as $value=>$name){
            echo CHtml::radioButton('Courses[course_type_id]', $model->course_type_id == $value, array('value'=>$value, 'id'=>'course_type_id_'.$value));
            echo CHtml::label($name, 'course_type_id_'.$value);
        }
    ?>
    <?php echo $form->error($model,'course_type_id'); ?>
</div>

</div>


</div>

	<div class="row buttons" >
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('id' => "course_btn")); ?>
	</div>

<?php $this->endWidget(); ?>






</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--<script>
  $(document).ready(function() {
    // Event handler for page load
    $(window).on('load', function() {
      // Apply the background image to the .form element
      $('.form').addClass('form-with-background');
    });
  });
</script>
<script>
$(document).ready(function() {
  // Function to apply CSS styles to the form
  function applyStylesToForm() {
    var controllerId = "<?php echo $controllerId; ?>";
    var actionId = "<?php echo $actionId; ?>";

    // Make the AJAX request to fetch CSS properties
    $.ajax({
      url: 'index.php?r=formtheme/applyThemeToForms',
      type: 'GET',
      data: { controller: controllerId, action: actionId },
      dataType: 'text',
      success: function(response) {
        // Handle the success response here
        // You can access the returned CSS string from the 'response' variable

        // Apply the CSS styles to the form
        $('form').css('cssText', response);

        // Set the background image for the .form element
        $('.form').css('background-image', 'url(http://localhost/testproject/images/64fb13ce81ab9_Line%20distribution%20.png)');
        $('.form').css('background-size', 'cover'); // Adjust background properties as needed
        $('.form').css('background-repeat', 'no-repeat');
        $('.form').css('background-position', 'center center');
        $('.form').css('background-attachment', 'fixed');
      },
      error: function(jqXHR, textStatus, errorThrown) {
        // Handle the error case here
        console.error('AJAX request failed:', textStatus, errorThrown);
      }
    });
  }

  // Event handler for page load
  $(window).on('load', function() {
    // Call the function to apply styles to the form
    applyStylesToForm();
  });
});

</script>-->



<!--<script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/ApplythemeonformId.js"></script>-->


  <script src="http://localhost/testproject/AjaxFiles/ApplyCSStoElements.js"></script>


