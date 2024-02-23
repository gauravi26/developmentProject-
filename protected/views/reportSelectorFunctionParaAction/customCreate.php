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
        $(document).ready(function () {
            $('#report_id').on('change', function () {
                var reportId = $(this).val();
                $.ajax({
                    url: 'index.php?r=ReportSelectorFunctionParaAction/query',
                    type: 'POST',
                    data: {reportId: reportId},
                    success: function (response) {
                        handleReportResponse(response.split(","));
                    },
                    error: function () {
                        console.log('Error fetching script details');
                    }
                });
            });
        });

        function handleReportResponse(columnIndex) {
            var $functionAction = $('#functionAction');

            if (columnIndex && columnIndex.length > 0) {
                var count = 0;
                $.each(columnIndex, function (index, value) {
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
                    var $addButton = $('<button>Add Function </button>').click(function (event) {
                        event.preventDefault();
                        count++;
                        functionActionPara(index, count, $rowDiv);
//                        attachActionSelect(index,count,$rowDiv)
                    });

                    $rowDiv.append($reportColumn, '<br>', $hiddenInput, '<br>', $labelRow, '<br>', $reportRowInput, '<br>', $addButton, '<br>', '<br>'); // Append button to rowDiv
                    //            $functionAction.append($rowDiv, '<br>'); // Add a <br> after each rowDiv
                    $rowDiv.insertBefore($functionAction.find('input[type="submit"]'));

                });
            } else {
                $functionAction.html('<p>No columns fetched. Please check if the report table has columns.</p>');
            }
        }

        function functionActionPara(index, count, $rowDiv) {
            // Create a new select element
            var $functionLabel = $('<br><label style="font-weight: bold;"><br>').text('Function ' + count);

            var $select = $('<br><select></select>').attr({
                name: 'function_select_' + index + '_' + count,
                class: 'functionSelect',
                 required: 'required'
            }).append('<br>');
            // Add options to the select element from the $functionList array
            $select.append('<option value="">Select function</option><br>');
<?php foreach ($functionList as $id => $functionName): ?>
                $select.append($('<option></option><br>').attr('value', '<?php echo $id; ?>').text('<?php echo $functionName; ?>'));
<?php endforeach; ?>
                         var $actionDiv = $('<div class="actionDiv"></div>').addClass('actionDiv_' + index + '_' + count);

            // Append the select element to the functionActionForm
            $rowDiv.append($functionLabel, $select);
            $rowDiv.append($actionDiv);

            //Calling function display parameter input fields based on selected function
            attachFunctionDropdownChangeEvent(index, count,$actionDiv,$select);
              // Append the action div to the functionActionForm

            // Calling function to attach action select
            attachActionSelect(index, count, $actionDiv);
//           attachActionSelect(index, count);
            console.log('Function called for index ' + index + ' with count ' + count);
        }

        //*************************************Function and Action Parameter functions ***********************************************

        // Function to attach event listener for function dropdown change event
        function attachFunctionDropdownChangeEvent(index, count,$actionDiv) {
                console.log("Calling handleActionParameters from attachFunctionDropdownChangeEvent");

            $(document).on('change', '[name="function_select_' + index + '_' + count + '"]', function () {
//$actionDiv.find('[name="function_argument_id_' + index + '_' + count + '_' + key + '"]').remove();

        var selectedFunctionId = $(this).val();
                //            console.log(selectedFunctionId);

                $.ajax({
                    url: 'index.php?r=ReportSelectorFunctionParaAction/fetchParametersForFunction',
                    type: 'POST',
                    data: {selectedFunctionId: selectedFunctionId},
                    success: function (response) {
                        var data = JSON.parse(response);
                         console.log(response);
                        handleFunctionParameters(data, index, count, $actionDiv);
                    },
                    error: function () {
                        console.log('Error fetching script details');
                    }
                });
            });
        }

        // Assuming $actionDiv is the actionDiv_0_1 element
function handleFunctionParameters(data, index, count, $actionDiv) {
    // Find the parent row
//    console.log($actionDiv);
    var selectFunctionField = $actionDiv.closest('.row');

   for (var key in data) {
       if (data.hasOwnProperty(key)) {
           var label = $('<label>').text(data[key]);
           var input = $('<input>').attr({
                type: 'text',
                id: 'parameter_' + key,
                name: 'function_argument_id_' + index + '_' + count + '_' + key,
                placeholder: 'Function Argument',
                required: 'required'
            });
              $('<br>').insertBefore($actionDiv);

              label.insertBefore($actionDiv);
              $('<br>').insertBefore($actionDiv);

            input.insertBefore($actionDiv);
            $('<br>').insertBefore($actionDiv);

          
        }
    }
}

        
   //**************************** Action Event Listener ************************
   
    function attachActionSelect(index,count,$actionDiv){
    console.log("Calling handleActionParameters from attachActionParameter");


        var $actionLable = $('<label style="font-style:bold;">').text('Action'+count);
            var $actionSelect = $('<select></select>').attr({
               name : 'action_id_' + index + '_'+count,
               class: 'actionSelect'
           }).append('<br>');
           
           $actionSelect.append('<option value="">Select Action</option>');
        <?php foreach ($actionsList as $id => $actionName): ?>
        $actionSelect.append($('<option></option>').attr('value', '<?php echo $id ?>').text('<?php echo $actionName ?>'));
                        
        <?php endforeach; ?>
//            console.log('hii');
            $actionDiv.append('<br><br>');
            $actionDiv.append($actionLable,$actionSelect);
            $actionDiv.append('<br>');
            attachActionParameter(index,count,$actionDiv,$actionSelect);
            

            }
    
    function attachActionParameter(index,count,$actionDiv){
        console.log(index,count,$actionDiv,);
            $(document).on('change','[name="action_id_' + index + '_' + count + '"]', function (){
                

//                        $actionDiv.find('.actionParameter').remove();

                var selectActionId = $(this).val(); // Access value directly from $actionSelect
        
//        console.log(selectActionId);
        
             $.ajax({
                    url: 'index.php?r=ReportSelectorFunctionParaAction/fetchParametersForAction',
                    type: 'POST',
                    data: {selectActionId: selectActionId},
                    success: function (response) {
                        var data = JSON.parse(response);
                        handleActionParameters(data, index, count,$actionDiv);
                    },
                    error: function () {
                        console.log('Error fetching script details');
                    }
                });  
                });
    }
   
   function handleActionParameters(data, index, count,$actionDiv){
//       console.log(data);
           var actionParamsCount = 0; // Initialize action parameters count

       for (var value in data) {
                if (data.hasOwnProperty(value)) {
                    var label = $('<label>').text(data[value]).attr('for', 'parameter_' + value);
                    var input = $('<input>').attr({
                        type: 'text',
                        id: 'action_parameter_' + value,
                        name: 'action_id_' + index + '_' + count + '_' + value,
                        placeholder: 'Action Argument'
                    });

                    // Append the label and input within the row
                    $actionDiv.append('<br><br>'); // Double line break before the input field
                    $actionDiv.append(label, input);
                    $actionDiv.append('<br>'); // Single line break after the input field
                           actionParamsCount++; // Increment action parameters count

               }
            }
       
   }
   
    </script>

</html>
