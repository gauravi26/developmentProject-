<?php
$controller = Yii::app()->getController();
$actionId = $controller->getAction()->getId();
$controllerId = $controller->getId();

$columns = array('student_id', 'first_name', 'last_name','percentage','marks', 'course_id', 'academic_status');
$StudentInformation = StudentInformation::model()->findAll(); // Assuming StudentInformation is your model

echo CHtml::hiddenField('controllerId', $controllerId);
echo CHtml::hiddenField('actionId', $actionId);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Report</title>
</head>
<body>
    <div class="report-container">
    <h2 class="report-heading">Student Report</h2> <!-- Dynamic Heading -->
        <table class="report-table" id="StudentInformation">
            <thead>
                <tr>
                    <?php foreach($columns as $columnName): ?>
                        <th><?php echo $columnName; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($StudentInformation as $student): ?>
                    <tr>
                        <?php foreach($columns as $columnName): ?>
                            <td>
                                <?php switch ($columnName) {
                                    case 'course_id':
                                        $coureName = Courses::model()->findByPk($student[$columnName]);
                                            echo isset($coureName)? $coureName->course_name: 'N/A';
                                        break;
                                    default:
                                        echo $student->$columnName;
                                        break;
                                } ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  
<script>
    function calculateMin(numbers) {
    return Math.min(...numbers);
}

function changeBackgroundColor(element, bgcolor) {
    element.style.backgroundColor = bgcolor;
}
// Function to fetch data based on user input (column name, row index, etc.)
function fetchData(input) {
    var selectorType = input.selectorType; // Selector type: column, row, cell
    var selectorValue = input.selectorValue; // Value based on selector type
    var targetElements = [];
    var values = [];
    var columnIndex = -1; // Initialize column index to -1

    // Function to get the index of a report column by name
    function getReportColumnIndex(columnName) {
        return Array.from(document.querySelectorAll('table th')).findIndex(th => th.textContent.trim() === columnName);
    }

    // Select elements based on selector type and value
    switch (selectorType) {
        case 'reportColumn':
            if (Array.isArray(selectorValue)) {
                // For each column name in the array
                selectorValue.forEach(function(columnName) {
                    // Get column index
                    var index = getReportColumnIndex(columnName);
                    if (index !== -1) {
                        columnIndex = index; // Update column index
                        // Get all elements in the target column
                        var columnElements = document.querySelectorAll('table td:nth-child(' + (index + 1) + ')');

                        // Extract values from the target column
                        columnElements.forEach(function(element) {
                            var value = parseInt(element.textContent.trim()); // Ensure to trim whitespace
                            if (!isNaN(value)) {
                                values.push(value);
                            }
                        });

                        targetElements = targetElements.concat(Array.from(columnElements)); // Concatenate elements
                    }
                });
            } else {
                // Get column index
                var index = getReportColumnIndex(selectorValue);
                if (index !== -1) {
                    columnIndex = index; // Update column index
                    // Get all elements in the target column
                    targetElements = document.querySelectorAll('table td:nth-child(' + (index + 1) + ')');

                    // Extract values from the target column
                    targetElements.forEach(function(element) {
                        var value = parseInt(element.textContent.trim()); // Ensure to trim whitespace
                        if (!isNaN(value)) {
                            values.push(value);
                        }
                    });
                }
            }
            break;

        // Add more cases for other selector types if needed

        default:
            console.error('Invalid selector type');
    }

    return { columnIndex: columnIndex, elements: targetElements, values: values }; // Return column index, elements, and values
}
// Sample data fetched from the database
var selectorType = 'reportColumn';
var targetColumnNames = ['percentage','marks']; // Array of column names
var conditionFunction = calculateMin;
var action = changeBackgroundColor;
var actionParams = { color: '#FFD700' };

// Loop through each column name
targetColumnNames.forEach(function(columnName) {
    // Call fetchData function with dynamic column name
    var data = fetchData({ selectorType: selectorType, selectorValue: columnName });

    if (data !== null) {
        // Execute the condition function
        var minValue = conditionFunction(data.values);

        // Execute the action on matching elements
        data.elements.forEach(function(element) {
            var value = parseInt(element.textContent.trim()); // Ensure to trim whitespace
            if (!isNaN(value) && value === minValue) {
                // Execute the style action
                action(element, actionParams.color);
            }
        });
    } else {
        console.log("Unable to fetch values for the '" + columnName + "' column or no values in the column.");
    }
});

</script>





 
</body>
