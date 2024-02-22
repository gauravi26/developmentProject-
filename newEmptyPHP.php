
   <?php  
<script>
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
 
 ?> 