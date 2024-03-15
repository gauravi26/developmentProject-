$(document).ready(function () {
    // Get the controller and action names
    var controller = $("#controllerId").val();
    var action = $("#actionId").val();

    // Call the function to fetch CSS properties
    fetchCssProperties(controller, action);
});

// Function to fetch CSS properties
function fetchCssProperties(controller, action) {
    $.ajax({
        url: 'index.php?r=reportThemeMapping/applyThemeReport',
        type: 'GET',
        dataType: 'text',
        data: { controller: controller, action: action },
        success: function (data) {
            // Check if the response contains the flag '@'
            
            if (data.includes('@')) {
                               

                console.log("Report not found to apply report theme");
                // Handle the case when report is not found
            } else {
//                console.log("Response Data:", data);
                // Combine CSS rules into a single string
                var combinedCssRule = data;

                // Create a style element and append it to the head
                var styleElement = $('<style>').text(combinedCssRule);
                $('head').append(styleElement);
                console.log("Theme applied to Report");
            }
        },
        error: function (xhr, status, error) {
            // Handle the error, if any
            console.error("Error fetching CSS properties:", status, error);
        }
    });
}
