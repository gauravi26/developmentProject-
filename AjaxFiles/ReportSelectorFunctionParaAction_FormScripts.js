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
    function createColumnInputFields(columnName) {
        var inputFieldContainer = $('<div class="row"></div>');
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
        
        reportRowField.after('<br><br>');
       var labelFunction = $('<label for="ReportSelectorFunctionParaAction[function_library_id][' + columnName+ ']' + '">' + "Function" + '</label>').css({
    'font-size': '16px',
    'margin-up': '12px',
    'margin-left': '18px'
});

       var sciptIdDropdown = $('<select>').attr({
    id: 'fieldIdDropdown_' + columnName,
    name: 'ReportSelectorFunctionParaAction[function_library_id][' + columnName + ']',
}).html($('#fieldIdDropdown').html()).css('margin-left', '16px');



 var actionIdDropdown = $('<select>').attr({
            id: 'actionIdDropdown_' + columnName,
            name: 'ReportSelectorFunctionParaAction[action_id][' + columnName + ']',
        }).html($('#actionIdDropdown').html());


        inputFieldContainer.append(label).append(textField).append(labelRow).append(reportRowField).append(labelFunction).append(sciptIdDropdown).append(sciptIdDropdown).append(actionIdDropdown);
        $('#columnScriptFields').append(inputFieldContainer).append('<br>');

        attachFunctionDropdownChangeEvent(columnName);
                attachActionParameter(columnName);

        
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
    var row = $('#fieldIdDropdown_' + columnName).closest('.row'); // Find the parent row of the dropdown
    var functionArgumentDiv = row.find('.functionArgumentDiv');
    
    if (functionArgumentDiv.length === 0) {
        functionArgumentDiv = $('<div>').addClass('functionArgumentDiv');
        row.append(functionArgumentDiv).append('<br>'); // Append function argument div inside the row
    } else {
        functionArgumentDiv.empty();
    }

    for (var key in data) {
        if (data.hasOwnProperty(key)) {
            var label = $('<label>').text(data[key]).attr('for', 'parameter_' + key);
            var input = $('<input>').attr({
                type: 'text',
                id: 'parameter_' + key,
                name:'function_argument_id_'+key,
                placeholder: 'Function Argument'
            });
            functionArgumentDiv.append(label).append(input);
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
    var row = $('#actionIdDropdown_' + columnName).closest('.row'); // Find the parent row of the dropdown
    var actionArgumentDiv = row.find('.actionArgumentDiv');
    
    if (actionArgumentDiv.length === 0) {
        actionArgumentDiv = $('<div>').addClass('actionArgumentDiv');
        row.append(actionArgumentDiv).append('<br>'); // Append action argument div inside the row
    } else {
        actionArgumentDiv.empty();
    }

    for (var key in data) {
        if (data.hasOwnProperty(key)) {
            var label = $('<label>').text(data[key]).attr('for', 'action_parameter_' + key);
            var input = $('<input>').attr({
                type: 'text',
                id: 'action_parameter_' + key,
                name:'action_argument_id_'+key,
                placeholder: 'Action Argument'
            });
            actionArgumentDiv.append(label).append(input);
        }
    }
}


    // Event listener for reportIdDropbox change event
    $('#reportIdDropbox').on('change', function(){
        var selectedReportId = $(this).val();
        fetchReportColumns(selectedReportId);
    });
});
