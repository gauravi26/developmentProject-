<script>function stringCheck(value, checkStrings) {
    return checkStrings.includes(value);
}

function changeBackgroundColor(element, bgcolor) {
        element.style.backgroundColor = bgcolor;
    }
   function fetchData(input) {

            var selectorType = input.selectorType;

            var selectorValue = input.selectorValue;

            var result = []; 

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
var selectorType = 'reportColumn';
var reportColumnName = ['marks'];
var targetColumnNames = [];
var conditionfunction = checkPassFail;
var functionPara = [30];
var actionStyle = changeBackgroundColor;
var actionPara = ['blue'];
var reportColumnData = fetchData({selectorType: selectorType, selectorValue: reportColumnName});      
function functionArg(reportElementIndex) {
    const functionValues = []; 
    let functionValue; 

    if (functionPara.some(element => element.includes('@'))) {
        var foundElements = functionPara.filter(element => element.includes('@'));
        var remainingStrings = foundElements.map(element => element.replace('@', ''));
        remainingStrings.forEach(functionParaColumn => {
            var ColumnForFunctionPara = fetchData({selectorType: selectorType, selectorValue: functionParaColumn});
            functionValue = ColumnForFunctionPara[0].values[reportElementIndex];
            functionValues.splice(0); 
            functionValues.push(functionValue);
        });
        return functionValue; 
    } else {
        return functionPara;
    }
}

reportColumnData[0].values.forEach((value, i) => {
    const element = reportColumnData[0].elements[i];
    var reportElementIndex = i;
    var functionParaValues = functionArg(reportElementIndex);
    console.log(value);
    var functionResult = conditionfunction(value, functionParaValues);
    if (functionResult === true) {
        applyActionOnTargetColumns(reportElementIndex);
    }
});

function applyActionOnTargetColumns(reportElementIndex) {
    if (targetColumnNames.length === 0) {
        const element = reportColumnData[0].elements[reportElementIndex];
        actionStyle(element, actionPara[0], actionPara[1]);
    } else {
        targetColumnNames.forEach(targetColumnName => {
            var targetColumnData = fetchData({selectorType: selectorType, selectorValue: targetColumnName});
            targetColumnData.forEach(function (columnData, columnIndex) {
                const element = targetColumnData[0].elements[reportElementIndex];
                actionStyle(element, ...actionPara);
            });
        });
    }
}</script>