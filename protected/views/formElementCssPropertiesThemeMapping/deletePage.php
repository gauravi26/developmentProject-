<!DOCTYPE html>

<?php 
$form = Forms::model()->findAll(array('order'=>'FORM_NAME'));
$formList = CHtml::listData($form,'id','FORM_NAME');

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Styles for For Forms</title>
</head>
<body>
    <h2>Delete Report Function Mapping</h2>
        <form id="deleteForm" action="index.php?r=reportFunctionMapping/customDelete" method="post">
        </form>
    </body>
    
    </html>
