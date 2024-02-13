<head>
    <meta charset="UTF-8">
    <title></title>
    <?php 
        $report = Report::model()->findAll(array('order' => 'report_name'));
        $reportList = CHtml::listData($report, 'id', 'report_name');
    ?>
</head>
<body>
    <form id="queryForm" method="post" action="<?php echo Yii::app()->createUrl('report/query'); ?>">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'report-theme-mapping-form',
            'enableAjaxValidation' => false,
        )); ?>
        <?php echo $form->labelEx($model, 'report_id'); ?>

        <select name="<?php echo CHtml::activeName($model, 'report_id'); ?>">
            <option value="" disabled selected>Select Report</option>
            <?php foreach ($reportList as $id => $reportName): ?>
                <option value="<?php echo $id; ?>"><?php echo $reportName; ?></option>
            <?php endforeach; ?>
        </select>

        <?php echo $form->error($model, 'report_id'); ?>

        <button type="submit" class="queryButton" id="queryButton">Fetch Columns and Records</button>
        
        <?php $this->endWidget(); ?>
    </form>
    
    <div id="queryResultContainer"></div>

    <script>
        $(document).ready(function () {
            $("#queryForm").submit(function (event) {
                // Prevent the default form submission
                event.preventDefault();
                
                // Use AJAX to submit the form
                $.ajax({
                    type: "POST",
                    url: $(this).attr("action"),
                    data: $(this).serialize(),
                    success: function (response) {
                        // Update the queryResultContainer div with the response
                        $("#queryResultContainer").html(response);
                    }
                });
            });
        });
    </script>
</body>
