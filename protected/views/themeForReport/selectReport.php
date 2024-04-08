<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Report Theme</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        <label for="report_theme_id">Select Report Theme to edit its Theme</label>
        <select id="report_theme_id" name="report_theme_id">
            <option value="">Select Report Theme</option>
            <?php foreach ($themeList as $id => $formName): ?>
                <option value="<?php echo $id; ?>"><?php echo $formName; ?></option>
            <?php endforeach; ?>  
        </select>
        <!-- Add buttons for deletion and updating -->
        <button type="button" id="deleteButton">Delete Report Theme</button>
        <button type="button" id="updateButton">Update Report Theme</button>
    </form>

    <script>
    $(document).ready(function() {
        // Click event handler for deleting styles
        $("#deleteButton").click(function() {
            var reportThemeID = $("#report_theme_id").val();
            console.log(reportThemeID);
            if (reportThemeID) {
                $.ajax({
                    url: "index.php?r=themeForReport/customDelete&reportThemeID=" + reportThemeID,
                    type: "POST",
                    data: {reportThemeID: reportThemeID},
                    success: function(response) {
                        console.log(response);
                        alert("Report Theme Deleted.");
                    },
                    error: function(xhr, status, error) {
                        console.error("Error occurred: " + error);
                    }
                });
            } else {
                alert("Please select a Theme.");
            }
        });

        // Click event handler for updating styles
        $("#updateButton").click(function() {
            var reportThemeID = $("#report_theme_id").val();
            console.log(reportThemeID);
            if (reportThemeID) {
                $.ajax({
                    url: "index.php?r=themeForReport/tabThemeReport&themeReportId=" + reportThemeID,
                    type: "POST",
                    data: {reportThemeID: reportThemeID},
                    success: function(response) {
                        console.log(response);
                            window.location.href = "index.php?r=themeForReport/tabThemeReport&themeReportId=" + reportThemeID;

                    },
                    error: function(xhr, status, error) {
                        console.error("Error occurred: " + error);
                    }
                });
            } else {
                alert("Please select a form.");
            }
        });
    });
    </script>
</body>
</html>
