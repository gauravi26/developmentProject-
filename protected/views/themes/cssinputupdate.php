
<?php
$isUpdatePage = true; // Set the flag to indicate this is the update page
include 'cssinput.php'; // or require 'themePreview.php';
?>
<h1>Custom Update Page Application </h1>
<?php
include 'themePreview.php'; // or require 'themePreview.php';
?>




      <script src="http://localhost/testproject/AjaxFiles/preview.js"></script>

<!-- Add JavaScript to handle tab switching -->
<script>
    window.addEventListener('DOMContentLoaded', function(event) {
        openTab(event, 'BoxModel');
    });

    function openTab(evt, tabName) {
        // Declare variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab and add an "active" class to the button that opened the tab
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
