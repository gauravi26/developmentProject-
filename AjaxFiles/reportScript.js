$(document).ready(function () {
    // Get the controller and action names
    var controllerName = $("#controllerId").val();
    var actionName = $("#actionId").val();

    // Call the function to fetch CSS properties
    applyColorStyles(controllerName, actionName);

    // Flag to check if DataTable is already initialized
    var isDataTableInitialized = false;

    // Function to initialize DataTable
    function initializeDataTable() {
        $('.report-table').DataTable({
            "paging": true,
            "ordering": true,
            "info": true
        });

        // Set the flag to true after initialization
        isDataTableInitialized = true;
    }

    // Function to apply color styles
    function applyColorStyles(controller, action) {
        $.ajax({
            url: 'index.php?r=reportFunctionMapping/reportScriptMapping',
            type: 'GET',
            data: { controller: controller, action: action },
            success: function (response) {
                // Parse the JSON response
                var appliedScripts = JSON.parse(response);

//                // Check if DataTable is initialized
//                if (!isDataTableInitialized) {
//                    // Initialize DataTable if not already initialized
//                    initializeDataTable();
//                }

                // Iterate through each script and append it to the body
                for (var i = 0; i < appliedScripts.length; i++) {
                    // Wrap each script in a function and execute it
                    (function(script) {
                        // Append the script to the body
                        $("body").append("<script>" + script + "</script>");
                    })(appliedScripts[i]);
                }

                // Additional code for handling the theme response, if needed
            },
            error: function () {
                console.error('Error applying theme.');
                // Additional error handling, if needed
            }
        });
    }

    // Event handler for draw.dt
    $('.report-table').on('draw.dt', function () {
        // Get the controller and action names
        var controllerName = $("#controllerId").val();
        var actionName = $("#actionId").val();

        // Call the applyColorStyles function with controller and action
        applyColorStyles(controllerName, actionName);
    });

    // Initial application of the script
    applyColorStyles();
});
