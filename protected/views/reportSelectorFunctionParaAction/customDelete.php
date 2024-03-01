<!DOCTYPE html>

<html>
     <?php
        $report = Report::model()->findAll(array('order' => 'report_name'));
        $reportList = CHtml::listData($report, 'id', 'report_name');
?>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <h2>Delete Function Action of Report</h2>
        <form id="deleteForm" action = "index.php?r=reportSelectorFunctionParaAction/mapping" method="post">
        <label for="formId">Select Form to delete its scripts</label>
        <select id="reportId" name="reportId">
             <option value="">Select Form</option>
            <?php foreach ($reportList as $id => $reportName): ?>
            <option value="<?php echo $id;?>"><?php echo $reportName;?></option>
<?php endforeach;?>  
            </select>   
            <input type="submit" value="Submit"><br><br>
            <p style="font-weight: bolder">NOTE THIS WILL DELETE ALL SCRIPT FOR SELECTED REPORT </p>
       </form>
    </body>
</html>
