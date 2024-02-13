<?php
$controller = Yii::app()->getController();
$actionId = $controller->getAction()->getId();
$controllerId = $controller->getId();

$columns = array_keys(ThemeForReport::model()->getTableSchema()->columns);
$ReportThemes = ThemeForReport::model()->findAll();

echo CHtml::hiddenField('controllerId', $controllerId);
echo CHtml::hiddenField('actionId', $actionId);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Theme Dynamic</title>
</head>
<body>
    <div class="report-container">
        <table class="report-table" id="ThemeforReport">
            <thead>
                <tr>
                    <?php foreach($columns as $columnName): ?>
                        <th><?php echo $columnName; ?></th> <!-- Fix: Correct variable name -->
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($ReportThemes as $ReportTheme): ?> <!-- Fix: Added ":" -->
                    <tr>
                        <?php foreach($columns as $columnName): ?>
                            <td>
                                <?php switch ($columnName) {
                                    default:
                                        echo $ReportTheme[$columnName];
                                        break;
                                } ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<!--<script>
   
    $(document).ready(function () {
        // Apply styles to elements in the eighth column
        var cssPropertyIdElements = document.querySelectorAll('table td:nth-child(5)');

        cssPropertyIdElements.forEach(function (element) {
            var cssPropertyValue = parseInt(element.textContent);

            // Add your styling logic here based on the 'css_property_id' column content
            // Example: Add color based on the value
            if (cssPropertyValue >= 30) {
                element.style.setProperty('color', 'green', 'important');
            } else {
                element.style.setProperty('color', 'red', 'important');
            }
            // Add more conditions as needed for your specific styling logic
        });
    });
</script>-->



</body>
