<?php
$this->beginWidget('CActiveForm', array(
    'id' => 'tab-form-id',
    'enableAjaxValidation' => false,
    // other form options
));
?>
<!-- Theme ID dropdown using Formthememapping model -->
<div>
    <?php echo $form->labelEx($elementModel, 'report_id'); ?>
    <?php
    $report = Report::model()->findAll(array('order' => 'report_name'));
        $reportList = CHtml::listData($report, 'id', 'report_name');

    $reportList = array('' => 'Select Report') + $reportList; 
    echo $form->dropDownList($elementModel, 'report_id', $reportList, array(
        'onchange' => 'updateElement(this.value)',
    ));
    ?>
    <?php echo $form->error($elementModel, 'theme_ID'); ?>
</div>
<?php $this->endWidget(); ?>

<script>
    function updateElement(themeID) {
        if (themeID) {
            // Construct the URL with the updated themeId
            var url = '<?php echo $this->createUrl('reportSelectorFunctionMapping/customUpdate', array('reportId' => 'reportIdPlaceholder')) ?>';
            url = url.replace('reportIdPlaceholder', themeID);
            
            // Redirect to the updated URL
            window.location.href = url;
        }
    }
</script>
