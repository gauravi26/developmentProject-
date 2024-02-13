<!DOCTYPE html>
<?php 
$report = Report::model()->findAll(array('order' => 'report_name'));
$reportList = CHtml::listData($report, 'id', 'report_name');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Report</title>
</head>
<body>
    <h2>Delete Report Function Mapping</h2>
    <form id="deleteForm" action="index.php?r=reportFunctionMapping/customDelete" method="post">
        <label for="reportId">Select Report:</label>
        <select id="reportId" name="reportId">
            <?php foreach ($reportList as $id => $reportName): ?>
                <option value="">Select Report</option>
                <option value="<?php echo $id; ?>"><?php echo $reportName; ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <input type="submit" value="Submit"><br><br>
        <p style="font-weight: bolder"> NOTE THIS WILL DELETE ALL FUNCTION MAPPING FOR SELECTED REPORT </p>
    </form>
</body>
</html>
