<style>
    
     .report-container { border-radius: 10px !important; }
</style><?php
$controller = Yii::app()->getController();
$actionId = $controller->getAction()->getId();
$controllerId = $controller->getId();

$columns = array('id', 'course_name', 'course_link'); // Add the desired columns for Courses model
$Courses = Courses::model()->findAll();

echo CHtml::hiddenField('controllerId', $controllerId);
echo CHtml::hiddenField('actionId', $actionId);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses Report</title>
</head>
<body>
    <div class="report-container">
                <h2 class="report-heading">Courses Report</h2> <!-- Dynamic Heading -->

        <table class="report-table" id="Courses">
            <thead>
                <tr>
                    <?php foreach($columns as $columnName): ?>
                        <th><?php echo $columnName; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Courses as $course): ?>
                    <tr>
                        <?php foreach($columns as $columnName): ?>
                            <td>
                                <?php switch ($columnName) {
                                    case 'course_link':
                                        echo CHtml::link($course->$columnName, $course->$columnName, array('target' => '_blank'));
                                        break;
                                    default:
                                        echo $course->$columnName;
                                        break;
                                } ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        
    </script>
</body>
