$(document).ready(function() {
    // Get the ID of the div with class "report"
    var reportId = $('.report-table').attr('id');
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
    function applyColorStyles(reportId){
        $.ajax({
            url: 'index.php?r=reportSelectorFunctionParaAction/applyfunctionAction&reportId=' + reportId,
            type: 'GET',
            dataType: 'json', // Expecting plain text response
            success: function(response) {
                // Iterate through each script in the response array
                for (var i = 0; i < response.length; i++) {
                    // Replace HTML line breaks with actual line breaks
                    var scriptContent = response[i].replace(/<br\s*\/?>/mg,"\n");
                    
                    // Append the script to the body
                    $("body").append("<script>" + scriptContent + "</script>");
                    console.log("Applied Function Action to report Id : "+reportId);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching scripts:', error);
            }
        });
    }

    // Initialize DataTable
    initializeDataTable();

    // Initial application of the script
    applyColorStyles(reportId);

    // Event handler for draw.dt
    $('.report-table').on('draw.dt', function () {
        // Get the controller and action names
        var controllerName = $("#controllerId").val();
        var actionName = $("#actionId").val();

        // Call the applyColorStyles function with report ID
        applyColorStyles(reportId);
    });

    // Event handler for pagination click
    $('.paginate_button').on('click', function() {
        // Trigger draw.dt event after pagination
        $('.report-table').trigger('draw.dt');
    });
});
