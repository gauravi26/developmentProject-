<?php
/* @var $this ReportFunctionMappingController */
/* @var $models ReportFunctionMapping[] */

$this->breadcrumbs=array(
    'Report Function Mappings'=>array('index'),
    'Update',
);

$this->menu=array(
    array('label'=>'List ReportFunctionMapping', 'url'=>array('index')),
    array('label'=>'Create ReportFunctionMapping', 'url'=>array('create')),
    array('label'=>'Manage ReportFunctionMapping', 'url'=>array('admin')),
);

$application_form = applicationForms::model()->findAll(array('order' => 'menu_form'));
$application_form_List = CHtml::listData($application_form, 'id', 'menu_form');

$report = Report::model()->findAll(array('order' => 'report_name'));
$reportList = CHtml::listData($report, 'id', 'report_name');

$scriptCodes = FunctionLibrary::model()->findAll(array('order' => 'function_name'));
$scriptCodeList = CHtml::listData($scriptCodes, 'id', 'function_name');
?>

<h1>Update ReportFunctionMapping</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'update-multiple-form',
    'enableAjaxValidation'=>false,
)); ?>

<?php foreach ($models as $model): ?>
    <div class="form">
        <?php echo CHtml::hiddenField("ReportTriggerMapping[{$model->id}][id]", $model->id); ?>
        <?php echo CHtml::hiddenField("ReportTriggerMapping[{$model->id}][report_id]", $model->report_id); ?>

        <div class="row">
            <?php echo CHtml::encode($model->report_columns); ?>
        </div>

        <div class="row">
            <?php echo CHtml::activeLabelEx($model, "[$model->id]function_library_id"); ?>
            <?php echo CHtml::activeDropDownList($model, "[$model->id]function_library_id", $scriptCodeList, array('prompt' => 'Select Script')); ?>
            <?php echo CHtml::error($model, "[$model->id]function_library_id"); ?>
        </div>

        <div class="row">
            <?php echo CHtml::activeLabelEx($model, "[$model->id]report_row"); ?>
            <?php echo CHtml::activeTextField($model, "[$model->id]report_row", array('size'=>60,'maxlength'=>255)); ?>
            <?php echo CHtml::error($model, "[$model->id]report_row"); ?>
        </div>
        
      <?php
    $functionParameterValueModels = ReportFunctionParameterValueMapping::model()->findAllByAttributes(array('report_function_mapping_id' => $model->id));
    foreach ($functionParameterValueModels as $parameterModel) {
        $functionParameterId = $parameterModel->function_argument_map_id;
    $functionNameModel = FunctionArgumentMap::model()->findByPk($functionParameterId);
        // Get the argument name
        $argumentName = $functionNameModel->argument_name;

        // Display parameter label and value
        echo "<div class='row'>";
        echo CHtml::activeLabelEx($parameterModel, "[$parameterModel->id]value", array(
        'label' => $functionNameModel->argument_name,
        'name' => "function_argument_id[$functionParameterId]" // Set the name attribute
    ));    echo CHtml::activeTextField($parameterModel, "[$parameterModel->id]value", array(
            'name' => "ReportFunctionMapping[$model->id][function_argument_id][$parameterModel->id]"));
        echo "</div>";
    }
    ?>

    </div>
<?php endforeach; ?>

<div class="row buttons">
    <?php echo CHtml::submitButton('Save'); ?>
</div>

<?php $this->endWidget(); ?>
<script>
$(document).on('change', '[id*="function_library_id"]', function() {
    var selectedFunctionId = $(this).val();
    console.log(selectedFunctionId); // Log the selected function ID to check

    // Perform an AJAX request to fetch details based on the selected function_library_id
    $.ajax({
        url: 'index.php?r=reportFunctionMapping/fetchParametersForFunction',
        type: 'POST',
        data: { selectedFunctionId: selectedFunctionId },
        success: function(response) {
            var data = JSON.parse(response);
            console.log(data);

            // Create functionArgumentDiv if it doesn't exist
            var functionArgumentDiv = $('#functionArgumentDiv');
            if (functionArgumentDiv.length === 0) {
                functionArgumentDiv = $('<div>').attr('id', 'functionArgumentDiv');
                $('body').append(functionArgumentDiv).append('<br>');
            } else {
                functionArgumentDiv.empty(); // Clear existing content
            }

            // Iterate over the key-value pairs and append them to functionArgumentDiv
            for (var key in data) {
                if (data.hasOwnProperty(key)) {
                    // Create label element
                    var label = $('<label>').text(data[key]).attr('for', 'parameter_' + key);

                    // Create input element
                    var input = $('<input>').attr({
                        type: 'text',
                        id: 'parameter_' + key,
                        name: 'function_argument_id_' + key,
                        placeholder: 'Value for ' + data[key]
                    });

                    // Append label and input to functionArgumentDiv
                    functionArgumentDiv.append(label).append(input);
                }
            }
        },
        error: function() {
            console.log('Error fetching script details');
        }
    });
});

</script>