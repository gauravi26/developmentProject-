$(document).ready(function(){

    // Function to handle AJAX request and populate columns
    function fetchReportColumns(selectedReportId) {
        $.ajax({
            url: 'index.php?r=ReportSelectorFunctionParaAction/query',
            type: 'POST',
            data: {reportId: selectedReportId},
            success: function(response){
                handleColumnResponse(response);
            },
            error: function(){
                console.log('Error fetching script details');
            }
        });
    }
    

    // Function to handle response and populate columns
    function handleColumnResponse(response) {
        if(response.trim() !== '') {
            $("input[name='ReportSelectorFunctionParaAction[report_column]']").val(response);
            $('#columnScriptFields').empty();
            var columnNames = response.split(',');
            columnNames.forEach(function(columnName) {
                columnName = columnName.trim();
                createColumnInputFields(columnName);
            });
        } else {
            $('#columnScriptFields').html('<p>No columns fetched. Please check if the report table has columns.</p>');
        }
    }

    // Function to create input fields for each column
   function createColumnInputFields(columnName, functionOptions,actionsList) {
       
       console.log(functionOptions);
              console.log(actionsList);

    var label = $('<label for="ReportSelectorFunctionParaAction_columns_' + columnName + '">' + "Report Column: " + columnName + '</label>').css({
        'font-size': '16px',
        'margin-bottom': '12px'
    });

    var textField = $('<input>').attr({
        type: 'text',
        id: 'ReportSelectorFunctionParaAction_columns_' + columnName,
        name: 'ReportSelectorFunctionParaAction[columns][' + columnName + ']',
        value: columnName,
        size: '60',
        maxlength: '255',
        class: 'textField',
        style: 'display: none;'
    });

    var labelRow = $('<label for="ReportSelectorFunctionParaAction_report_row_' + columnName + '">' + "Row(word)" + '</label>');
    var reportRowField = $('<input>').attr({
        type: 'text',
        id: 'ReportSelectorFunctionParaAction_report_row_' + columnName,
        name: 'ReportSelectorFunctionParaAction[report_row][' + columnName + ']',
        placeholder: 'Enter Word to Specify Row',
        size: '60',
        maxlength: '255',
        class: 'reportRowField',
        style: 'width: 225px; margin-right: 1000px; margin-bottom:12px'
    });

    var functionActionDiv = $('<div>').addClass('FUNCTION_ACTION');

var functionDiv = $('<div>').addClass('functionDiv');
reportRowField.after('<br><br>');

var labelFunction = $('<label>').attr('for', 'ReportSelectorFunctionParaAction[function_library_id][' + columnName + ']').text("Function").css({
    'font-size': '16px',
    'margin-top': '12px', // Corrected property name
    'margin-left': ''
});

        var selectInput = $('<select>').attr({
            id: 'functionIdDropdown_' + columnName,
            name: '[function_library_id][' + columnName + '][]'
        });

        // Add options based on the functionOptions
        $.each(functionOptions, function(id, name) { // Adjusted iteration for functionOptions
            var option = $('<option>').attr('value', id).text(name); // Adjusted property names
            selectInput.append(option);
        });

handleFunctionParameters({}, columnName); // Call handleFunctionParameters here to initialize function parameters

functionDiv.append(labelFunction)
    .append(selectInput)
    .append(attachFunctionDropdownChangeEvent(columnName));

functionActionDiv.append(functionDiv);

// Create the actionDiv
var actionDiv = $('<div>').addClass('actionDiv').attr('id', 'actionDiv_' + columnName);

var labelAction = $('<label>').attr('for', 'ReportSelectorFunctionParaAction[action_library_id][' + columnName + ']')
    .text("Action")
    .css({
        'font-size': '16px',
        'margin-top': '12px'
    });

        var actionSelect = $('<select>').attr({
          id: 'actionIdDropdown_' + columnName,
          name: 'ReportSelectorFunctionParaAction[action_id][' + columnName + '][]'
      });

      // Populate options based on the actionsList
      $.each(actionsList, function(id, name) {
          actionSelect.append($('<option>').attr('value', id).text(name));
      });
handleFunctionParameters({}, columnName); // Call handleFunctionParameters here to initialize function parameters


actionDiv.append(labelAction)
    .append(actionSelect)
    .append(attachActionParameter(columnName)); // Append attachActionParameter after actionIdDropdown

functionActionDiv.append(actionDiv);
 var addMoreFunctionButton = $('<button>').attr('id', 'addMoreFunctionButton_' + columnName).text('Add More Function').click(function() {
        // Call a function to add another function-action div for the same column
        addFunctionActionDiv(columnName, functionActionDiv);
    });

// Append the combined function and action div to wherever it needs to go
// For example, assuming reportRowField is where you want to append it:
reportRowField.after(functionActionDiv);

    var inputFieldContainer = $('<div>').addClass('row');
    inputFieldContainer.append(label)
                        .append(textField)
                        .append(labelRow)
                        .append(reportRowField)
                        .append(functionActionDiv)
                        .append('<br>');
                
//inputFieldContainer.append(addMoreFunctionButton).append('<br>');

 
 
//    // Append the actionDiv to the inputFieldContainer
//    inputFieldContainer.append(actionDiv);

    // Append the inputFieldContainer to the columnScriptFields
    $('#columnScriptFields').append(inputFieldContainer).append('<br>');
}


    // Function to attach event listener for function dropdown change event
    function attachFunctionDropdownChangeEvent(columnName) {
        $(document).on('change', '#fieldIdDropdown_' + columnName, function() {
            var selectedFunctionId = $(this).val();
//            console.log(selectedFunctionId);

            $.ajax({
                url: 'index.php?r=ReportSelectorFunctionParaAction/fetchParametersForFunction',
                type: 'POST',
                data: { selectedFunctionId: selectedFunctionId },
                success: function(response) {
                    var data = JSON.parse(response);
                  
                    handleFunctionParameters(data, columnName);
                },
                error: function() {
                    console.log('Error fetching script details');
                }
            });
        });
    }


    // Function to handle response and populate function parameters
    // Function to handle response and populate function parameters for a specific column
    function handleFunctionParameters(data, columnName) {
    // Find the parent functionDiv of the dropdown
    var functionDiv = $('#fieldIdDropdown_' + columnName).closest('.functionDiv');
    
    for (var key in data) {
        if (data.hasOwnProperty(key)) {
            var label = $('<label>').text(data[key]).attr('for', 'parameter_' + key);
            var input = $('<input>').attr({
                type: 'text',
                id: 'parameter_' + key,
                name:'function_argument_id_'+key,
                placeholder: 'Function Argument',
                style:'  margin-top: 10px;'
            });
            functionDiv.append(label).append(input);
        }
    }
}

//***************For action Parameter ////////////////

function attachActionParameter(columnName) {
    $(document).on('change', '#actionIdDropdown_' + columnName, function(){
        var selectedActionId = $(this).val();
        console.log(selectedActionId);
        $.ajax({
                url: 'index.php?r=ReportSelectorFunctionParaAction/fetchParametersForAction',
                type: 'POST',
                data: { selectedActionId: selectedActionId },
                success: function(response) {
                            console.log(response);

                    var data = JSON.parse(response);
                  
                    handleActionParameters(data, columnName);
                },
                error: function() {
                    console.log('Error fetching script details');
                }
            });
        
        
    });
    
}
function handleActionParameters(data, columnName) {
    var actionDiv = $('#actionIdDropdown_' + columnName).closest('.actionDiv'); // Find the parent row of the dropdown
    
  

    for (var key in data) {
        if (data.hasOwnProperty(key)) {
            var label = $('<label>').text(data[key]).attr('for', 'action_parameter_' + key);
            var input = $('<input>').attr({
                type: 'text',
                id: 'action_parameter_' + key,
                name:'action_argument_id_'+key,
                placeholder: 'Action Argument'
            });
            actionDiv.append(label).append(input);
        }
    }
}

//function addFunctionActionDiv(columnName, functionDiv) {
//    // Create a new function-action div
//    var functionActionDiv = $('<div>').addClass('FUNCTION_ACTION');
//
//    // Create the actionDiv
//    var actionDiv = $('<div>').addClass('actionDiv').attr('id', 'actionDiv_' + columnName);
//
//    var labelAction = $('<label>').attr('for', 'ReportSelectorFunctionParaAction[action_library_id][' + columnName + ']')
//        .text("Action")
//        .css({
//            'font-size': '16px',
//            'margin-top': '12px'
//        });
//
//    var actionIdDropdown = $('<select>').attr({
//        id: 'actionIdDropdown_' + columnName,
//        name: 'ReportSelectorFunctionParaAction[action_id][' + columnName + ']',
//    }).html($('#actionIdDropdown').html());
//
//    actionDiv.append(labelAction)
//        .append(actionIdDropdown)
//        .append(attachActionParameter(columnName)); // Append attachActionParameter after actionIdDropdown
//
//    functionActionDiv.append(functionDiv)
//        .append(actionDiv);
//
//    var addMoreFunctionButton = $('<button>').attr('id', 'addMoreFunctionButton_' + columnName).text('Add More Function').click(function() {
//        // Call a function to add another function-action div for the same column
//        addFunctionActionDiv(columnName, functionDiv);
//    });
//
//    // Append the combined function and action div to wherever it needs to go
//    // For example, assuming reportRowField is where you want to append it:
//    functionDiv.after(functionActionDiv).after(addMoreFunctionButton).append('<br>');
//}

    // Event listener for reportIdDropbox change event
    $('#reportIdDropbox').on('change', function(){
        var selectedReportId = $(this).val();
        fetchReportColumns(selectedReportId);
    });
});

// Function to collect POST data for each row

