$(document).ready(function () {
    // Event handler for page load
    $(window).on('load', function () {
        // Get the controller and action names
        var controllerName = $("#controllerId").val();
        var actionName = $("#actionId").val();

        // Call the function to fetch CSS properties
        fetchCssProperties(controllerName, actionName);
    });
});

// Function to fetch CSS properties
function fetchCssProperties(controller, action) {
    // Make the AJAX request to fetch CSS properties
    $.ajax({
        url: 'index.php?r=tabletheme/applyThemeToReport',
        type: 'GET',
        dataType: 'text', // Change the data type to 'text'
        data: { controller: controller, action: action },
        success: function (data) {
            // Create a style element and append it to the head
            var styleElement = $('<style>').text(data);
            $('head').append(styleElement);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // Handle the error case here
            console.error('AJAX request failed:', textStatus, errorThrown);
        }
    });
}
