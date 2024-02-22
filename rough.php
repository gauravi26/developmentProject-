<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
<script>

  function functionActionPara(index, count, $rowDiv) {
            // Create a new select element
            var $functionLabel = $('<br><label style="font-weight: bold;"><br>').text('Function ' + count);

            var $select = $('<br><select></select>').attr({
                name: 'function_select_' + index + '_' + count,
                class: 'functionSelect'
            }).append('<br>');
            // Add options to the select element from the $functionList array
            $select.append('<option value="">Select function</option><br>');
<?php foreach ($functionList as $id => $functionName): ?>
                $select.append($('<option></option><br>').attr('value', '<?php echo $id; ?>').text('<?php echo $functionName; ?>'));
<?php endforeach; ?>
             var $actionDiv = $('<div class="actionDiv"></div>').addClass('actionDiv_' + index + '_' + count);
            // Append the select element to the functionActionForm
            $rowDiv.append($functionLabel, $select, $actionDiv);
            //Calling function display parameter input fields based on selected function
            attachFunctionDropdownChangeEvent(index, count);

            console.log('Function called for index ' + index + ' with count ' + count);
        }
        // Function to attach event listener for function dropdown change event
        function attachFunctionDropdownChangeEvent(index, count) {
            $(document).on('change', '[name="function_select_' + index + '_' + count + '"]', function () {
                var selectedFunctionId = $(this).val();
                //            console.log(selectedFunctionId);

                $.ajax({
                    url: 'index.php?r=ReportSelectorFunctionParaAction/fetchParametersForFunction',
                    type: 'POST',
                    data: {selectedFunctionId: selectedFunctionId},
                    success: function (response) {
                        var data = JSON.parse(response);

                        handleFunctionParameters(data, index, count);
                    },
                    error: function () {
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
                        placeholder: 'Function Argument'
                    });

                    // Append the label and input within the row
                    selectFunctionField.append('<br><br>'); // Double line break before the input field
                    selectFunctionField.append(label, input);
                    selectFunctionField.append('<br>'); // Single line break after the input field
                }
            }

        }
</script>