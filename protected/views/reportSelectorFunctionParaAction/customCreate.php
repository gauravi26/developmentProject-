<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    $report = Report::model()->findAll(array('order' => 'report_name'));
    $reportList = CHtml::listData($report, 'id', 'report_name');
    
    $function = FunctionLibrary::model()->findAll(array('order' => 'function_display_name'));
    $functionList = CHtml::listData($function, 'id', 'function_display_name');

    $sctions = ActionLibrary::model()->findAll(array('order' => 'action_display_name'));
    $actionsList = Chtml::listData($sctions, 'id', 'action_display_name');
    ?>
    <form class="functionActionForm" id="functionAction" method="post" action="<?php echo Yii::app()->createUrl('ReportSelectorFunctionParaAction/save'); ?>">
       
        
        <select name="report_id" id="report_id"> <!-- Added name attribute to select -->
           
            <option value="">Select Report</option> <!-- Added a default option -->
            <?php foreach ($reportList as $id => $reportName): ?>
                <option value="<?php echo $id; ?>"><?php echo $reportName; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        
        <input type="submit" name="submit" value="Save">
    </form>
</body>

<script>
 $(document).ready(function(){
    $('#report_id').on('change', function() {
        var reportId = $(this).val();
        $.ajax({
            url: 'index.php?r=ReportSelectorFunctionParaAction/query',
            type: 'POST',
            data: {reportId: reportId},
            success: function(response){
                handleReportResponse(response.split(","));
            },
            error: function(){
                console.log('Error fetching script details');
            }
        });
    });
});

function handleReportResponse(columnIndex) {
    var $functionAction = $('#functionAction');

    if (columnIndex && columnIndex.length > 0) {
         var count = 0;
        $.each(columnIndex, function(index, value) {
            var $rowDiv = $('<div class="row"></div>').css({
                'border': '1px groove grey',
                'padding': '10px', // Adjust padding as needed
                'margin': '10px' // Adjust margin as needed
            });
            var $reportColumn = $('<label><b>Report Column:</b> ' + value + '</label>').css('font-size', '18px');
            var $hiddenInput = $('<input type="hidden" name="report_column_' + index + '" value="' + value + '" required>');
            var $labelRow = $('<label><b>Row(word)</b></label>');
            var $reportRowInput = $('<input type="text" name="report_row_' + index + '">');
            var $addButton = $('<button>Add Function </button>'); // Create a button
            var $addButton = $('<button>Add Function </button>').click(function(event) {
                 event.preventDefault();
                 count++;
                 functionActionPara(index, count,$rowDiv);
             });

            $rowDiv.append($reportColumn, '<br>', $hiddenInput, '<br>', $labelRow, '<br>', $reportRowInput, '<br>', '<br>', $addButton, '<br>', '<br>'); // Append button to rowDiv
//            $functionAction.append($rowDiv, '<br>'); // Add a <br> after each rowDiv
$rowDiv.insertBefore($functionAction.find('input[type="submit"]'));

        });
    } else {
        $functionAction.html('<p>No columns fetched. Please check if the report table has columns.</p>');
    }
}

    function functionActionPara(index, count, $rowDiv) {
        // Create a new select element
    var $functionLabel = $('<label><br>').text('Function ' + count); // Create label with text 'Function' and count

       var $select = $('<select></select>').attr({
             name: 'function_select_' + index + '_' + count ,
             class: 'functionSelect'
        }).append('<br>');
            // Add options to the select element from the $functionList array
            $select.append('<option value="">Select function</option><br>');
         <?php foreach ($functionList as $id => $functionName): ?>
                    $select.append($('<option></option><br>').attr('value', '<?php echo $id; ?>').text('<?php echo $functionName; ?>'));
         <?php endforeach; ?>
            // Append the select element to the functionActionForm
            $rowDiv.append($functionLabel,$select);
            //Calling function display parameter input fields based on selected function
           attachFunctionDropdownChangeEvent(index, count);

            console.log('Function called for index ' + index + ' with count ' + count);
        }

//*************************************Function and Action Parameter functions ***********************************************
   
   // Function to attach event listener for function dropdown change event
    function attachFunctionDropdownChangeEvent(index, count) {
        $(document).on('change', '[name="function_select_' + index + '_' + count + '"]' , function() {
            var selectedFunctionId = $(this).val();
//            console.log(selectedFunctionId);

            $.ajax({
                url: 'index.php?r=ReportSelectorFunctionParaAction/fetchParametersForFunction',
                type: 'POST',
                data: { selectedFunctionId: selectedFunctionId },
                success: function(response) {
                    var data = JSON.parse(response);
                  
                    handleFunctionParameters(data, index, count);
                },
                error: function() {
                    console.log('Error fetching script details');
                }
            });
        });
    }

 function handleFunctionParameters(data, index, count) {
    // Find the parent functionDiv of the dropdown
    var selectFunctionField = $('[name="function_select_' + index + '_' + count + '"]').closest('.row');
    
    for (var key in data) {
        if (data.hasOwnProperty(key)) {
            var label = $('<label>').text(data[key]).attr('for', 'parameter_' + key);
            var input = $('<input>').attr({
                type: 'text',
                id: 'parameter_' + key,
                name: 'function_argument_id_' + index + '_' + count + '_' + key,
                placeholder: 'Function Argument',
                style: 'margin-top: 10px;'
            }).after('<br>');
            
            // Append the label and input within the row
                        selectFunctionField.append('<br>');

            selectFunctionField.append(label, input);
             selectFunctionField.append('<br>');
        }
    }
}
</script>
    
</html>
