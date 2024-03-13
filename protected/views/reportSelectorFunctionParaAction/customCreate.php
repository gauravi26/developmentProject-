<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                console.log(reportId);
                $.ajax({
                    url: 'index.php?r=ReportSelectorFunctionParaAction/query',
                    type: 'POST',
                    data: {reportId: reportId},
                    success: function (response) {
                        console.log(response);
                        
                        
                        
                        handleReportResponse(response.split(","));
                    },
                    error: function () {
                        console.log('Error fetching script details');
                    }
                });
            });
        });

        function handleReportResponse(columnIndex) {
                $('.row').remove();
        var $functionAction = $('#functionAction');

            if (columnIndex && columnIndex.length > 0) {
                var count = 0;
                $.each(columnIndex, function (index, value) {
                    var $rowDiv = $('<div class="row"></div>').css({
                        'border': '1px groove grey',
                        'padding': '10px',
                        'width': '880px',
                        'margin': '10px'
                        
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
                    });

                    $rowDiv.append($reportColumn, '<br>', $hiddenInput, '<br>', $labelRow, '<br>', $reportRowInput, '<br>', '<br>', $addButton, '<br>', '<br>'); // Append button to rowDiv
                    $rowDiv.insertBefore($functionAction.find('input[type="submit"]'));

                });
            } else {
                $functionAction.html('<p>No columns fetched. Please check if the report table has columns.</p>');
            }
        }

        function functionActionPara(index, count, $rowDiv) {
        
        var actioncount = 0;
            // Create a new select element
            var $functionLabel = $('<br><label style="font-weight: bold;"><br>').text('Function ' + count).addClass('_' + index + '_' + count);
            var $select = $('<select></select>').attr({
                name: 'function_select_' + index + '_' + count,
                class: 'functionSelect' + index + '_' + count,
                required: 'required'
            });

            $select.append('<option value="">Select function</option>');
            <?php foreach ($functionList as $id => $functionName): ?>
                $select.append($('<option></option>').attr('value', '<?php echo $id; ?>').text('<?php echo $functionName; ?>'));
            <?php endforeach; ?>

            var $deleteButton = $('<i class="fa fa-trash-o" style="font-size:20px"></i>')
                    .click(function(event) {
                        event.preventDefault();
                        functionDelete(index, count, $rowDiv);
                    }).addClass('_' + index + '_' + count).css({
                        'margin-left': '10px'                       
                    });

                    //Action Div 
            var $actionDiv = $('<div class="actionDiv"></div>').addClass('actionDiv_' + index + '_' + count);
            var $addActionBtn = $('<button>Add Action</button>')
        .click(function(event) {
            event.preventDefault();
            actioncount++;
            attachActionSelect(index, count, $actionDiv, actioncount);
        })
        .css({
            'margin-left': '300px',
            'margin-top': '10px',
            'padding': '3px'
        }).addClass('actionBtn_' + index + '_' + count);
            // Append the select element to the functionActionForm
            $rowDiv.append($functionLabel, $select);
            $rowDiv.append($actionDiv);
            $deleteButton.insertAfter($select);
             
            // Calling function to attach event listener for function dropdown change event
            attachFunctionDropdownChangeEvent(index, count, $actionDiv);
            // Attach action select
            var actioncount = 0;
            $addActionBtn.insertAfter($actionDiv);
//            attachActionSelect(index, count, $actionDiv,actioncount);
        }

// Function to attach event listener for function dropdown change event
        function attachFunctionDropdownChangeEvent(index, count, $actionDiv) {
            $(document).on('change', '[name="function_select_' + index + '_' + count + '"]', function () {
                var selectedFunctionId = $(this).val();

                // Clear previous function type dropdowns
                $('.row').find('.functionTypeSelect').remove();

                // Create and append the function type dropdown
                var $typeOfFunctionPara = $('<select></select>').attr({
                    name: 'function_type_select_' + index + '_' + count,
                    class: 'functionTypeSelect',
                    required: 'required'
                }).append('<br>');

                $typeOfFunctionPara.append('<option value="">Select Argument Type</option>');
                $typeOfFunctionPara.append('<option value="0">Static Parameter</option>');
                $typeOfFunctionPara.append('<option value="1">Report Column</option>');

                // Append the function type dropdown after the function select dropdown
                $(this).after($typeOfFunctionPara);

                // Event handler for function type dropdown change event
                $(document).on('change', '[name="function_type_select_' + index + '_' + count + '"]', function () {
                    var selectedFunctionType = $(this).val();

                    // Perform AJAX request only if a function type is selected
                    if (selectedFunctionType !== '') {
                        $.ajax({
                            url: 'index.php?r=ReportSelectorFunctionParaAction/fetchParametersForFunction',
                            type: 'POST',
                            data: {selectedFunctionId: selectedFunctionId},
                            success: function (response) {
                                var data = JSON.parse(response);
                                console.log(data);
                                handleFunctionParameters(data, index, count, $actionDiv, selectedFunctionType);
                            },
                            error: function () {
                                console.log('Error fetching script details');
                            }
                        });
                    }
                });
            });
        }

        function handleFunctionParameters(data, index, count, $actionDiv, selectedFunctionType) {

            var selectFunctionField = $actionDiv.closest('.row');

            // Remove previous labels and input fields
            selectFunctionField.find('.funParaLable' + index + '_' + count).remove();
            selectFunctionField.find('[name^="function_argument_id_' + index + '_' + count + '"]').remove();
            selectFunctionField.find('.created-br').remove(); // Remove only the created <br> elements

            for (var key in data) {
                if (data.hasOwnProperty(key)) {
                    // Create and append new labels
                   var label = $('<label>').text('Function Parameter: ' + data[key]).addClass('funParaLable' + index + '_' + count);
                    label.css({
                        
                        'padding-top': '6px',
                        'padding-bottom': '6px',
                       'font-weight': 'bold'
                    });


                 
                    label.insertBefore($actionDiv);

                    // Check if selectedFunctionType is 1 (Report Column)
                    if (selectedFunctionType === '1') {
                        // Call fetchReportColumns and handle report columns
                        fetchReportColumns(data, index, count, $actionDiv, selectedFunctionType, key);

                    } else {
                        // Create and append input fields
                        var input = $('<input>').attr({
                            type: 'text',
                            id: 'parameter_' + key,
                            name: 'function_argument_id_' + index + '_' + count + '_' + key,
                            placeholder: 'Function Argument',
                            required: 'required'
                        }).css({
                            'margin-left': '50px', // Setting left margin
                            'padding': '1px' // Setting padding
                        });

                        $('<br>').addClass('br').insertBefore($actionDiv); // Add class to the created <br>

                        label.insertBefore($actionDiv);
                        $('<br>').addClass('br').insertBefore($actionDiv); // Add class to the created <br>

                        input.insertBefore($actionDiv);
                        $('<br>').addClass('br').insertBefore($actionDiv); // Add class to the created <br>
                    }
                }
            }
        }



        //**************************** Action Event Listener ************************

        function attachActionSelect(index, count, $actionDiv,actioncount) {
//    console.log("Calling handleActionParameters from attachActionParameter");
            var Columncount = 0;
          
            console.log("Action count in Select : "+actioncount);
            var $actionLable = $('<label style="font-style:bold;">').text('Action' + count).css({
                'margin-left': '150px',
                'padding': '1px'

            });
            var $actionSelect = $('<select></select>').attr({
                name: 'action_id_' + index + '_' + count+ '_'+actioncount,
                class: 'actionSelect'
            }).append('<br>').css({
                'margin-left': '1px',
                'padding': '1px'

            });

            $actionSelect.append('<option value="">Select Action</option>');
<?php foreach ($actionsList as $id => $actionName): ?>
                $actionSelect.append($('<option></option>').attr('value', '<?php echo $id ?>').text('<?php echo $actionName ?>'));

<?php endforeach; ?>
           

             var $addTargetBtn = $('<button>Add Target Column </button>')
                    .attr('id', 'fetch_columns_button') // Set the ID attribute to 'fetch_columns_button'
            
                    .click(function (event) {
                        event.preventDefault();
                        Columncount++;
                      
                        fetchTargetColumns(index, count, Columncount, $actionDiv,actioncount);
                    }).css({
                'margin-left': '200px',
                'padding': '1px'

            });
               

//            console.log('hii');
            $actionDiv.append('<br><br>');
            $actionDiv.append($actionLable, $actionSelect);
            $actionDiv.append('<br><br>');
            console.log("Action count just before passing : "+actioncount);
            attachActionParameter(index, count, $actionDiv,actioncount);
            $actionDiv.append($addTargetBtn);
//            $addActionBtn.insertAfter($actionSelect);
            


        }

        function attachActionParameter(index, count, $actionDiv,actioncount) {
            console.log("action id count : "+actioncount);
            console.log(JSON.stringify(actioncount));
            

            
$(document).on('change', '[name="action_id_' + index + '_' + count+ '_' + actioncount + '"]', function () {

                var selectActionId = $(this).val(); // Access value directly from $actionSelect
//                console.log("Action ID : "+actioncount),
//                console.log("Action ID : "+count),
                $.ajax({
                    url: 'index.php?r=ReportSelectorFunctionParaAction/fetchParametersForAction',
                    type: 'POST',
                    data: {selectActionId: selectActionId},
                    success: function (response) {
                        var data = JSON.parse(response);
                        console.log(response);
                        console.log(data);

                        handleActionParameters(data, index, count, $actionDiv,actioncount);
                    },
                    error: function () {
                        console.log('Error fetching script details');
                    }
                });
            });
        }

        function handleActionParameters(data, index, count, $actionDiv,actioncount) {
            var selectFunctionField = $actionDiv.closest('.row');
           
            // Remove previous action parameters labels and input fields
//            selectFunctionField.find('.actionParaLable').remove();
//            selectFunctionField.find('.actionPara').remove();
//            selectFunctionField.find('.br').remove(); // Remove only the created <br> elements

            selectFunctionField.find('.br').remove();
            var actionParamsCount = 0; // Initialize action parameters count

            for (var value in data) {
                if (data.hasOwnProperty(value)) {
                    var label = $('<label>').text('Action Parameter: ' +  data[value]).attr('for', 'parameter_' + value).css({
                        'margin-left': '200px',
                        'font-weight':'bold',
                        'padding': '1px'
                    }).addClass('actionParaLable_' + index + '_' + count);

                    var input = $('<input>').attr({
                        type: 'text',
                        id: 'action_parameter_' + value,
                        name: 'action_parameter_' + index + '_' + count + '_' + value+'_'+actioncount,
                        placeholder: 'Action Argument',
                        class: 'actionPara'
                    }).css({
                        'margin-left': '200px',
                        'padding': '1px'
                    });
                    
                   

                    // Append the label and input within the actionDiv
                    $actionDiv.append('<br><br>');
                    $actionDiv.append(label);
                    $actionDiv.append('<br>');
                    $actionDiv.append(input);
                    $actionDiv.append('<br>');
                    actionParamsCount++;


                    
                }
            }
        }

//*******************************************************************************************************
        function fetchTargetColumns(index, count, Columncount, $actionDiv,actioncount) {
            var selectReportId = $('[name="report_id"]').val();
             console.log("Columncount : "+Columncount);
            $.ajax({
                url: 'index.php?r=reportSelectorFunctionParaAction/fetchReportColumns',
                type: 'POST',
                data: {selectReportId: selectReportId},
                success: function (response) {
                    var data = JSON.parse(response);
//            console.log(response);
//            console.log(data);
//           console.log(count,Columncount);

                    handleTargetColumn(data, index, count, $actionDiv, Columncount,actioncount);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        $('#fetch_columns_button').on('click', function () {
            fetchTargetColumns();
        });


        function handleTargetColumn(data, index, count, $actionDiv, Columncount,actioncount) {
            var label = $('<label style="font-style:bold;"><b>Target Column</b></label>').css({
                'margin-left': '194px',
                'padding': '5px'

            });

            var $targetColumn = $('<select></select>').attr({
                name: 'target_column_' + index + '_' + count + '_' + Columncount+ '_' + actioncount,
                class: 'targetColumn'
            }).append('<br>').css({
                'margin-left': '30px',
                'padding': '1px'

            });
            console.log(data);
            $targetColumn.append('<option value="">Select Target Columns</option><br>');
            // Iterate over the keys of the data object
            for (var key in data) {
                // Iterate over the values associated with each key
                data[key].forEach(function (columnName) {
                    // Create an option element and append it to the select element
                    $targetColumn.append('<option value="'+ columnName + '">' + columnName + '</option>');
                });
            }
            $actionDiv.append('<br>');
            $actionDiv.append(label, $targetColumn);
            $actionDiv.append('<br>');
        }

//*******************************************************************************************
        function fetchReportColumns(data, index, count, $actionDiv, selectedFunctionType, key) {
            var selectReportId = $('[name="report_id"]').val();

            $.ajax({
                url: 'index.php?r=reportSelectorFunctionParaAction/fetchReportColumns',
                type: 'POST',
                data: {selectReportId: selectReportId},
                success: function (response) {
                    var Columndata = JSON.parse(response);
                    console.log(Columndata);
//            console.log(data);
//           console.log(count,Columncount);

                    handleReportColumn(data, Columndata, index, count, $actionDiv, selectedFunctionType);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

//        $('#fetch_columns_button').on('click', function () {
//            fetchTargetColumns();
//        });


        function handleReportColumn(data, Columndata, index, count, $actionDiv, selectedFunctionType) {
            $('.row').find('.reportColumnList').remove();
            $('.row').find('.br').remove();

            var label = $('<label>').text(data[key]).addClass('funParaLable_' + index + '_' + count);
            label.css({
                'margin-left': '20px',
                'padding': '5px'
            });

            console.log(data);
            for (var key in data) {
                if (data.hasOwnProperty(key)) {
                    var $reportColumn = $('<select></select>').attr({
                        name: 'function_argument_id_' + index + '_' + count + '_' + key,

                        required: 'required'
                    }).append('<br>').addClass('reportColumnList').css({
                        'margin-left': '1px',
                        'padding': '1px'

                    });
                }
            }
            $reportColumn.append('<option value="">Select Report Columns</option><br>');
            // Iterate over the keys of the data object
            for (var key in Columndata) {
                // Iterate over the values associated with each key
                Columndata[key].forEach(function (columnName) {
                    // Create an option element and append it to the select element
                    $reportColumn.append('<option value="' +'@' + columnName + '">' + columnName + '</option>');
                });
            }
            $('<br>').addClass('created-br').insertBefore($actionDiv); // Add class to the created <br>

            label.insertBefore($actionDiv);
            $('<br>').addClass('created-br').insertBefore($actionDiv); // Add class to the created <br>

            $reportColumn.insertBefore($actionDiv);
            $('<br>').addClass('created-br').insertBefore($actionDiv); // Add class to the created <br>

        }
//Funtion Delete 
function functionDelete(index, count, $rowDiv) {
  
  //Delete all elements with _index_count
  $rowDiv.find('[name*="_' + index + '_' + count + '"]').remove();
    $rowDiv.find('[class*="' + index + '_' + count + '"]').remove();
  
  
}

    </script>

</html>
