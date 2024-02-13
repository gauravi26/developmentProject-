<?php  
$controller = Yii::app()->getController();
$actionId = $controller->getAction()->getId();
$controllerId = $controller->getId();

// Assuming $tableThemes is an array of TableTheme models
//$tableThemes = /* ... fetch your TableTheme models here ... */;

// Get the column names dynamically
$columns = array_keys(TableTheme::model()->getTableSchema()->columns);

echo CHtml::hiddenField('controllerId', $controllerId);
echo CHtml::hiddenField('actionId', $actionId);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="report-container">
    <h2>Table Themes</h2>
    <table class="report-table" id="tableThemeTable">
        <thead>
            <tr>
                <?php foreach ($columns as $columnName): ?>
                    <th><?php echo $columnName; ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tableThemes as $theme): ?>
                <tr>
                    <?php foreach ($columns as $columnName): ?>
                        <td>
                            <?php 
                            // Handle special cases (e.g., fetching related model data)
                            switch ($columnName) {
                                case 'report_id':
                                    $reportModel = Report::model()->findByPk($theme[$columnName]);
                                    echo isset($reportModel) ? $reportModel->report_name : 'N/A';
                                    break;
                                // Add more cases if needed for other special handling
                                default:
                                    echo $theme[$columnName];
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
