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
        var label = $('<label for="ReportSelectorFunctionParaAction_columns_' + columnName + '">' + columnName + '</label>');
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
        var reportRowField = $('<input>').attr({
            type: 'text',
            id: 'ReportSelectorFunctionParaAction_report_row_' + columnName,
            name: 'ReportSelectorFunctionParaAction[report_row][' + columnName + ']',
            placeholder: 'Enter Word to Specify Row',
            size: '60',
            maxlength: '255',
            class: 'reportRowField',
            style: 'width: 225px; margin-right: 1000px'
        });
        
        reportRowField.after('<br><br>');

        var sciptIdDropdown = $('<select>').attr({
            id: 'fieldIdDropdown_' + columnName,
            name: 'ReportSelectorFunctionParaAction[function_library_id][' + columnName + ']',
        }).html($('#fieldIdDropdown').html());


 var actionIdDropdown = $('<select>').attr({
            id: 'actionIdDropdown_' + columnName,
            name: 'ReportSelectorFunctionParaAction[action_id][' + columnName + ']',
        }).html($('#actionIdDropdown').html());


        inputFieldContainer.append(label).append(textField).append(reportRowField).append(sciptIdDropdown).append(actionIdDropdown);
        $('#columnScriptFields').append(inputFieldContainer).append('<br>');

        attachFunctionDropdownChangeEvent(columnName);
    }

    // Function to attach event listener for function dropdown change event
    function attachFunctionDropdownChangeEvent(columnName) {
        $(document).on('change', '#fieldIdDropdown_' + columnName, function() {
            var selectedFunctionId = $(this).val();
            console.log(selectedFunctionId);

            $.ajax({
                url: 'index.php?r=ReportSelectorFunctionParaAction/fetchParametersForFunction',
                type: 'POST',
                data: { selectedFunctionId: selectedFunctionId },
                success: function(response) {
                    var data = JSON.parse(response);
                    console.log(data);
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


    // Event listener for reportIdDropbox change event
    $('#reportIdDropbox').on('change', function(){
        var selectedReportId = $(this).val();
        fetchReportColumns(selectedReportId);
    });
});
