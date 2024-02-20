<?php
/* @var $this FormFieldCsspropertyValueMappingController */
/* @var $model FormFieldCsspropertyValueMapping */
/* @var $form CActiveForm */

$forms = Forms::model()->findAll(array('order'=> 'FORM_NAME'));
$formsList = CHtml::listData($forms,'FORM_ID', 'FORM_NAME');


$cssProperty= CssProperties::model()->findAll(array('order'=> 'property_name'));
$cssPropertyList = CHtml::listData($cssProperty,'id', 'property_name');


// Fetch the field data
$fields = FormFields::model()->findAll(array('order'=> 'TITLE'));

// Create an associative array where the keys are FIELD_ID and the values are TITLE
$fieldsList = array();
foreach ($fields as $field) {
    $fieldsList[$field->FIELD_ID] = $field->TITLE;
}
?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-field-cssproperty-value-mapping-form',
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
    <?php echo $form->dropDownList($model, 'form_id', $formsList, array('id' => 'form_id','empty' => 'Select Form')); ?>
    <?php echo $form->error($model,'form_id'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'field_id'); ?>
    <?php echo $form->dropDownList($model, 'field_id', array(), array('id' => 'field_id', 'empty' => 'Select Field')); ?>
    <?php echo $form->error($model,'field_id'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'css_property_id'); ?>
    <?php echo $form->dropDownList($model, 'css_property_id', $cssPropertyList, array('empty' => 'Select CSS Property')); ?>
    <?php echo $form->error($model,'css_property_id'); ?>
</div>


	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
    $(document).ready(function() {
        // Listen for changes in the "Form" dropdown list
        $('#form_id').on('change', function() {
            var formId = $(this).val(); // Get the selected form ID

            // Send an AJAX request to fetch the field IDs associated with the selected form ID
            $.ajax({
                url: 'index.php?r=formFieldCsspropertyValueMapping/fetchFields', // Adjust the URL to point to your controller/action
                type: 'GET',
                data: { formId: formId },
                success: function(response) {
                    console.log(response);
                    var jsonResponse = JSON.parse(response);
                   console.log(jsonResponse);
                    // Update the options of the existing "field_id" dropdown list with the returned field IDs
                    $('#field_id').empty(); // Clear existing options
                    $.each(jsonResponse.fieldIds, function(index, fieldId) {
                                var fieldName = jsonResponse.fieldNames[index];

                        $('#field_id').append($('<option>', {
                            value: fieldId,
                            text: fieldName
                        }));
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>