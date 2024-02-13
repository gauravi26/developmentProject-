
        
<?php
/* @var $this EffectsController */
/* @var $model Effects */
/* @var $form CActiveForm */

$application_form = applicationForms::model()->findAll(array('order' => 'menu_form'));
$application_form_List = CHtml::listData($application_form, 'id', 'menu_form');

$form_field = FormFields::model()->findAll(array('order' => 'TITLE'));
$form_field_List = CHtml::listData($form_field, 'FIELD_ID', 'TITLE'); // Use 'FIELD_ID' as the key

$scriptCodes = ScriptCode::model()->findAll(array('order' => 'effects'));
$scriptCodeList = CHtml::listData($scriptCodes, 'id', 'effects');

$effect_trigger = EffectTrigger::model()->findAll(array('order'=>'effect_trigger'));
$effect_trigger_List = CHtml::listData($effect_trigger, 'id', 'effect_trigger');
 
$controller = Yii::app()->getController();
//  print_r($controller);
// die();
    $actionId = $controller->getAction()->getId();
    $controllerId = $controller->getId();

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'effects-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'form_id'); ?>
        <?php echo $form->dropDownList($model,'form_id', $application_form_List, array('prompt' => 'Select Form')); ?>
		<?php echo $form->error($model,'form_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trigger_id'); ?>
                <?php echo $form->dropDownList($model,'trigger_id', $effect_trigger_List, array('prompt' => 'Select Form')); ?>
		<?php echo $form->error($model,'trigger_id'); ?>
	</div>

	
<div class="row">
    <?php echo $form->labelEx($model,'FIELD_ID'); ?>
    <?php echo $form->dropDownList($model, 'FIELD_ID', $form_field_List, array('prompt' => 'Select Form')); ?>
    <?php echo $form->error($model,'FIELD_ID'); ?>
</div>

	<div class="row">
        <?php echo $form->labelEx($model, 'effect_code_id');?>
       <?php echo $form->dropDownList($model, 'effect_code_id', $scriptCodeList, array('prompt' => 'Select Effect', 'id' => 'fieldIdDropdown'));?>
       <?php echo $form->error($model, 'effect_code_id');?>
       </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('id'=>'effect_btn')); ?>
	</div>

<?php $this->endWidget(); ?>
        
<!--       <script>
     $(document).ready(function() {
   $('#effect_btn').hover(
      function () {
         var element = $(this);
         element.addClass('slide-in');
      },
      function () {
         var element = $(this);
         element.removeClass('slide-in');
      }
   );
});
   </script>-->


</div><!-- form -->