<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete Form Styles</title>
</head>
<body>
    <?php
    // Retrieve unique theme names directly from the database
    $themes = ThemeForReport::model()->findAll(array(
        'condition' => 'reference_id != 0', // Exclude records with reference_id = 0
        'order' => 'theme_name'
    ));
    $themeList = CHtml::listData($themes, 'reference_id', 'theme_name');
    ?>

    <form id="deleteForm">
        <label for="report_theme_id">Select Form to delete its styles</label>
        <select id="report_theme_id" name="report_theme_id">
            <option value="">Select Form</option>
            <?php foreach ($themeList as $id => $formName): ?>
                <option value="<?php echo $id; ?>"><?php echo $formName; ?></option>
            <?php endforeach; ?>  
        </select>
        <!-- Add a button for deletion -->
        <button type="button" id="deleteButton">Delete Styles</button>
        <button type="button" id="updateButton">Updates Styles</button>
    </form>

    <script>
        document.getElementById("deleteButton").addEventListener("click", function() {
            var reportID = document.getElementById("report_theme_id").value;
            console.log(reportID);
            if (reportID) {
                // Send an AJAX request to the controller method
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "index.php?r=themeForReport/customDelete", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        console.log(xhr.responseText);
                    }
                };
                // Send the report_theme_id as a parameter in the POST request
                xhr.send("report_theme_id=" + reportID);
            } else {
                alert("Please select a form.");
            }
        });
    </script>
</body>
</html>
