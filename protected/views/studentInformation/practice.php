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
//
//        function checkPassFail(value, markParameter) {
//            if (value >= markParameter) {
//                return true;
//            } else {
//                return false;
//            }
//        }
//        function changeBackgroundColor(element, bgcolor) {
//            element.style.backgroundColor = bgcolor;
//        }
//
//        function fetchData(input) {
//            var selectorType = input.selectorType;
//            var selectorValue = input.selectorValue;
//            var targetElements = [];
//            var values = [];
//            var columnIndex = -1;
//
//            function getReportColumnIndex(columnName) {
//                return Array.from(document.querySelectorAll('table th')).findIndex(th => th.textContent.trim() === columnName);
//            }
//
//            switch (selectorType) {
//                case 'reportColumn':
//                    if (Array.isArray(selectorValue)) {
//                        selectorValue.forEach(function (columnName) {
//                            var index = getReportColumnIndex(columnName);
//                            if (index !== -1) {
//                                columnIndex = index;
//                                var columnElements = document.querySelectorAll('table td:nth-child(' + (index + 1) + ')');
//                                columnElements.forEach(function (element) {
//                                    var value = parseInt(element.textContent.trim());
//                                    if (!isNaN(value)) {
//                                        values.push(value);
//                                    }
//                                });
//                                targetElements = targetElements.concat(Array.from(columnElements));
//                            }
//                        });
//                    } else {
//                        var index = getReportColumnIndex(selectorValue);
//                        if (index !== -1) {
//                            columnIndex = index;
//                            targetElements = document.querySelectorAll('table td:nth-child(' + (index + 1) + ')');
//                            targetElements.forEach(function (element) {
//                                var value = parseInt(element.textContent.trim());
//                                if (!isNaN(value)) {
//                                    values.push(value);
//                                }
//                            });
//                        }
//                    }
//                    break;
//
//                default:
//                    console.error('Invalid selector type');
//            }
//
//            return {columnIndex: columnIndex, elements: targetElements, values: values};
//        }
//        var selectorType = 'reportColumn';
//        var targetColumnNames = ['marks', 'percentage'];
//        var functionParameter = [30];
//        var conditionFunction = checkPassFail;
//        targetColumnNames.forEach(function (columnName) {
//            var data = fetchData({selectorType: selectorType, selectorValue: columnName});
//            if (data !== null) {
//                data.values.forEach(function (value, index) {
//                    var functionResult = conditionFunction(value, functionParameter);
//                    if (functionResult == true) {
//                        console.log(functionResult);
//                        var element = data.elements[index];
//                        changeBackgroundColor(element, 'green');
//                    } else {
//                        var element = data.elements[index];
//                        changeBackgroundColor(element, 'red');
//                    }
//                });
//            } else {
//                console.log("Unable to fetch values for the '" + columnName + "' column or no values in the column.");
//            }
//        });
   function stringCheck(value, checkStrings) {
//    console.log("Value:", value);
//    console.log("Check Strings:", checkStrings);
    return checkStrings.includes(value);
}


function changeTextStyle(element, textDecoration, fontSize) {
    if (element) {
        element.style.textDecoration = textDecoration;
        element.style.fontSize = fontSize;
    } else {
        console.error('Element is undefined or null');
    }
}


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
                selectorValue.forEach(function(columnName) {
                    var columnIndex = getReportColumnIndex(columnName);
                    if (columnIndex !== -1) {
                        var columnElements = document.querySelectorAll('table td:nth-child(' + (columnIndex + 1) + ')');
                        var columnValues = [];
                        columnElements.forEach(function(element) {
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
                    columnElements.forEach(function(element) {
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

// Fetch data
// Fetch data
var reportColumnName = ['academic_status'];
var targetColumnNames = ['first_name'];
var selectorType = 'reportColumn';
// var conditionFunction = stringCheck; // Uncomment this if needed
var reportColumnData = fetchData({ selectorType: selectorType, selectorValue: reportColumnName });
if (reportColumnData !== null) {
    // Iterate through the report column data
//    reportColumnData.forEach(function(columnData, columnIndex) {
        // Inside this loop,  access each column object and its properties
            reportColumnData.forEach(function(dataObject) {
           console.log(dataObject);
           // Access the columnIndex and values properties if needed
        var columnIndex = dataObject.columnIndex;
        var values = dataObject.values;

        // Iterate through the values array of each dataObject
        values.forEach(function(value, index) {
            // Access the corresponding element using the index
            var element = dataObject.elements[index];
            // Access the row property of the _DT_CellIndex object
            var row = element._DT_CellIndex.row;
            console.log("Value:", value, "Row:", row);
        });

//        dataObject.values.forEach(function(values, index) {
//            // Inside this loop,  can access each value in the current column  
//            
//            
//            if (value !== null) {
//                var functionResult = stringCheck(value, ['Regural']);
//    
//    
//                if (functionResult) {
//                    // code for handling the case where the condition is true
//                    
//                   targetColumnData = fetchData({ selectorType: selectorType, selectorValue: targetColumnNames });
//                   targetColumnData.forEach(function(columnData, columnIndex){
//                       columnData.values.forEach(function(value, index) {
//                            var reportColumnElement = reportColumnData[index];
////                           console.log(index,columnIndex);
////                          console.log(columnIndex);
////                          if (index === columnIndex) {
//                              
//                              var targetColumnElement = targetColumnData[columnIndex].elements[columnIndex];
//                               console.log(reportColumnElement,targetColumnElement);
//
////                              console.log(targetColumnElement);
//
//                // the position (row) is the same for both report and target columns
//                // Apply styles to the corresponding element of the target column
//                     
//                         changeTextStyle(targetColumnElement, 'italic', '18px');
//
////                        }
//                           
//                       });      
//                       
//                   });
//                } else {
//
////                   console.log("Function result is false for value: " + value);
//                }
//            } else {
//                // This is for the case where value is null in the report column
//                console.log("Value not found in report column");
//            }
//        }); // For each value of report column
    }); // For each column in report data*****************
} else {
    // This is for the case where report column data is not fetched 
    console.log("Not able to fetch report column data");
}








//reportColumnData.forEach(function(columnIndex) {
//    reportColumn.values.forEach(function(value) {
//        // Apply the condition function
//        var functionResult = stringCheck(value, ['Regular']); // Checking if value is 'Regular'
////        console.log("Condition checked for report column value " + reportValue + ": " + functionResult);
//       
//        // Check the function result and apply style accordingly
//        if (functionResult) {
//            // Fetch data for the target columns dynamically
//            var reportColumnsData = fetchData({ selectorType: selectorType, selectorValue: targetColumnNames });
////            console.log("report column data :"+reportColumnsData);
////            break;
//            // Retrieve the corresponding index and element for the target columns
//            reportColumnsData.forEach(function(targetColumn) {
//                var targetColumnIndex = targetColumn.values.findIndex(function(value) {
//                    return value === reportValue;
//                });
//                
//                if (targetColumnIndex !== -1) {
//                    var targetElement = targetColumn.elements[targetColumnIndex];
//                    var reportElement = reportColumn.elements[reportValueIndex];
//                    
//                    // Apply the style to the target element
//                    changeTextStyle(targetElement, 'italic', '18px');
//                }
//                
//                else {
//                    
//                    "Not match ";
//                }
//            });
//        }
//    });
//});




    </script>





</body>
