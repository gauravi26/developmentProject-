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
        $.each(columnIndex, function(index, value) {
            var $rowDiv = $('<div class="row"></div>').css({
                'border': '1px groove grey',
                'padding': '5px', // Adjust padding as needed
                'margin': '5px' // Adjust margin as needed
            });
            var $reportColumn = $('<label><b>Report Column:</b> ' + value + '</label>').css('font-size', '18px');
            var $hiddenInput = $('<input type="hidden" name="report_column_' + index + '" value="' + value + '" required>');
            var $labelRow = $('<label><b>Row(word)</b></label>');
            var $reportRowInput = $('<input type="text" name="report_row_' + index + '">');
            var $addButton = $('<button>Add Function </button>'); // Create a button
            $addButton.on('click', function() {
                functionActionPara(); // Call functionActionPara when the button is clicked
            });

            $rowDiv.append($reportColumn, '<br>', $hiddenInput, '<br>', $labelRow, '<br>', $reportRowInput, '<br>', $addButton); // Append button to rowDiv
            $functionAction.append($rowDiv, '<br>'); // Add a <br> after each rowDiv
        });
    } else {
        $functionAction.html('<p>No columns fetched. Please check if the report table has columns.</p>');
    }
}

function functionActionPara(){
    // Function action parameters
}

   
function functionActionPara(){


}



</script>
    
</html>
