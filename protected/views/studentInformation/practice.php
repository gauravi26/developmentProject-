<?php
$controller = Yii::app()->getController();
$actionId = $controller->getAction()->getId();
$controllerId = $controller->getId();

$columns = array('student_id', 'first_name', 'last_name', 'percentage', 'marks', 'course_id', 'academic_status');
$StudentInformation = StudentInformation::model()->findAll(); // Assuming StudentInformation is r model

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

        <div id="result">

        </div>
    </div>
    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/applyFunctionActionScript.js"></script>



    <script>
        // Function 
        function stringCheck(value, checkStrings) {

            return checkStrings.includes(value);
        }

        //Action
        function changeTextStyle(element, textDecoration, fontSize) {
            if (element) {
                element.style.textDecoration = textDecoration;
                element.style.fontSize = fontSize;
            } else {
                console.error('Element is undefined or null');
            }
        }

        //Selector that take column name
        function fetchData(input) {
            var selectorType = input.selectorType;
            var selectorValue = input.selectorValue;
            var result = []; // Store results for each column separately

            function getReportColumnIndex(columnName) {
                return Array.from(document.querySelectorAll('table th')).findIndex(th => th.textContent.trim() === columnName);
            }

            switch (selectorType) {
                case 'reportColumn':
                    if (Array.isArray(selectorValue)) {
                        selectorValue.forEach(function (columnName) {
                            var columnIndex = getReportColumnIndex(columnName);
                            if (columnIndex !== -1) {
                                var columnElements = document.querySelectorAll('table td:nth-child(' + (columnIndex + 1) + ')');
                                var columnValues = [];
                                columnElements.forEach(function (element) {
                                    var value = element.textContent.trim();
                                    columnValues.push(value);
                                });
                                result.push({
                                    columnIndex: columnIndex,
                                    elements: Array.from(columnElements),
                                    values: columnValues
                                });
                            }
                        });
                    } else {
                        var columnIndex = getReportColumnIndex(selectorValue);
                        if (columnIndex !== -1) {
                            var columnElements = document.querySelectorAll('table td:nth-child(' + (columnIndex + 1) + ')');
                            var columnValues = [];
                            columnElements.forEach(function (element) {
                                var value = element.textContent.trim();
                                columnValues.push(value);
                            });
                            result.push({
                                columnIndex: columnIndex,
                                elements: Array.from(columnElements),
                                values: columnValues
                            });
                        }
                    }
                    break;

                default:
                    console.error('Invalid selector type');
            }

            return result;
        }

        var reportColumnName = ['academic_status'];
        var targetColumnNames = ['first_name', 'academic_status'];
        var selectorType = 'reportColumn';
        var conditionfunction = stringCheck;
        var functionPara = ['Regural'];
        var actionStyle = changeTextStyle;
        var actionPara = ['italic', '18px'];
        var reportColumnData = fetchData({selectorType: selectorType, selectorValue: reportColumnName});
//******************************************************************************************************************
       
        function functionArg() {
            const functionValues = [];

            if (functionPara.some(element => element.includes('@'))) {
                var foundElements = functionPara.filter(element => element.includes('@'));

                var remainingStrings = foundElements.map(element => element.replace('@', ''));

                remainingStrings.forEach(functionParaColumn => {
                    var ColumnForFunctionPara = fetchData({selectorType: selectorType, selectorValue: functionParaColumn});

                    ColumnForFunctionPara[0].values.forEach((value, i) => {
                        functionValues.push(value);
                    });
                });
                return functionValues;
            } else {
                return functionPara;
            }
        }

        const functionParaValues = functionArg();
        console.log(functionParaValues);


//*****************************************************************************************             
     
           reportColumnData[0].values.forEach((value, i) => {
            const element = reportColumnData[0].elements[i];
            var reportElementIndex = i;
            console.log(functionParaValues);
            var functionResult = conditionfunction(value, functionParaValues);
            if (functionResult === true) {
                applyActionOnTargetColumns(reportElementIndex);
            }
            console.log(reportElementIndex);
        });

        function applyActionOnTargetColumns(reportElementIndex) {
           if (targetColumnNames.length === 0) {
               const element = reportColumnData[0].elements[reportElementIndex];
                 actionStyle(element, actionPara[0], actionPara[1]);
               
           }
           
           else{

            targetColumnNames.forEach(targetColumnName => {
                var targetColumnData = fetchData({selectorType: selectorType, selectorValue: targetColumnName});
                targetColumnData.forEach(function (columnData, columnIndex) {
                    const element = targetColumnData[0].elements[reportElementIndex];
                    actionStyle(element, actionPara[0], actionPara[1]);
                });
            });
        }}





    </script>




</body>
