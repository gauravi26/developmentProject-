<?php
// Assuming you have a CHtml::form or ActiveForm here
 $report = Report::model()->findAll(array('order' => 'report_name'));
    $reportList = CHtml::listData($report, 'id', 'report_name');

echo CHtml::beginForm(['reportFunctionMapping/selectReport'], 'post'); // Assuming 'selectReport' is the correct action

echo CHtml::dropDownList('selectedReportId', null, $reportList, ['prompt' => 'Select a report']);

echo CHtml::submitButton('Submit');

echo CHtml::endForm();
?>
