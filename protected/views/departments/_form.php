
<?php
/* @var $this DepartmentsController */
/* @var $model Departments */
/* @var $form CActiveForm */

$controller = Yii::app()->getController();
 
    $actionId = $controller->getAction()->getId();
    $controllerId = $controller->getId();
?>

<div class="form" id="departmentForm">
    <?php echo CHtml::hiddenField('controllerId',$controllerId); ?>
<?php echo CHtml::hiddenField('actionId',$actionId); ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'departments-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
            <?php echo $form->labelEx($model,'department_code'); ?>
            <?php echo $form->textField($model,'department_code',array('size'=>60,'maxlength'=>255, 'id'=>'department_code')); ?>
            <?php echo $form->error($model,'department_code'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'department_name'); ?>
            <?php echo $form->textField($model,'department_name',array('size'=>60,'maxlength'=>255, 'id'=>'department_name')); ?>
            <?php echo $form->error($model,'department_name'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'department_desc'); ?>
            <?php echo $form->textField($model,'department_desc',array('size'=>60,'maxlength'=>255, 'id'=>'department_desc')); ?>
            <?php echo $form->error($model,'department_desc'); ?>
        </div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('id' => "department_btn")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
         <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/applyStyleToFormElement.js"></script>
