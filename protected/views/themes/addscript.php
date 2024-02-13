<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Script for UI</title>
</head>
<body>
    <h1>Add JavaScript Name and Code</h1>
    
<form method="post" action="<?php echo Yii::app()->createUrl('themes/addScript'); ?>">
        <label for="jsName">JavaScript Name:</label>
        <input type="text" id="jsName" name="jsName"><br><br>

        <label for="jsCode">JavaScript Code:</label>
        <textarea id="jsCode" name="jsCode" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
