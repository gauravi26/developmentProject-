<?php
$controller = Yii::app()->getController();
$actionId = $controller->getAction()->getId();
$controllerId = $controller->getId();

$columns = array('student_id', 'first_name', 'last_name', 'percentage', 'marks', 'course_id', 'academic_status');
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
        <table class="report-table" id=6>
            <thead>
                <tr>
                    <?php foreach ($columns as $columnName): ?>
                        <th><?php echo $columnName; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($StudentInformation as $student): ?>
                    <tr>
                        <?php foreach ($columns as $columnName): ?>
                            <td>
                                <?php
                                switch ($columnName) {
                                    case 'course_id':
                                        $coureName = Courses::model()->findByPk($student[$columnName]);
                                        echo isset($coureName) ? $coureName->course_name : 'N/A';
                                        break;
                                    default:
                                        echo $student->$columnName;
                                        break;
                                }
                                ?>
                            </td>
                    <?php endforeach; ?>
                    </tr>
<?php endforeach; ?>
            </tbody>
        </table>
    </div>
             <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/applyFunctionActionScript.js"></script>

<!--    <script>
      function checkPassFail(value, markParameter) { if (value >= markParameter) { return true; } else { return false; } } function applyColorStyle(element,passColor ) { element.style.setProperty('color', passColor, 'important'); } function fetchData(input) {
var selectorType = input.selectorType;
var selectorValue = input.selectorValue;
var targetElements = [];
var values = [];
var columnIndex = -1;

function getReportColumnIndex(columnName) {
return Array.from(document.querySelectorAll('table th')).findIndex(th => th.textContent.trim() === columnName);
}

switch (selectorType) {
case 'reportColumn':
if (Array.isArray(selectorValue)) {
selectorValue.forEach(function(columnName) {
var index = getReportColumnIndex(columnName);
if (index !== -1) {
columnIndex = index;
var columnElements = document.querySelectorAll('table td:nth-child(' + (index + 1) + ')');
columnElements.forEach(function(element) {
var value = parseInt(element.textContent.trim());
if (!isNaN(value)) {
values.push(value);
}
});
targetElements = targetElements.concat(Array.from(columnElements));
}
});
} else {
var index = getReportColumnIndex(selectorValue);
if (index !== -1) {
columnIndex = index;
targetElements = document.querySelectorAll('table td:nth-child(' + (index + 1) + ')');
targetElements.forEach(function(element) {
var value = parseInt(element.textContent.trim());
if (!isNaN(value)) {
values.push(value);
}
});
}
}
break;

default:
console.error('Invalid selector type');
}

return { columnIndex: columnIndex, elements: targetElements, values: values };
}
var selectorType = 'reportColumn';
var targetColumnNames = ['percentage'];
var functionParameter = [30];
var conditionFunction = checkPassFail;
targetColumnNames.forEach(function(columnName) {
var data = fetchData({ selectorType: selectorType, selectorValue: columnName });
if (data !== null) {
data.values.forEach(function(value, index) {
var functionResult = conditionFunction(value, functionParameter);
if (functionResult == true) {
console.log(functionResult);
var element = data.elements[index];
applyColorStyle(element, 'green');
} else {
var element = data.elements[index];
applyColorStyle(element, 'red');
}
});
} else {
console.log("Unable to fetch values for the '" + columnName + "' column or no values in the column.");
}
});

    </script>

-->




</body>
