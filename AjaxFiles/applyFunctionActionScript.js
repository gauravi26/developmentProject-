$(document).ready(function() {
    // Get the ID of the div with class "report"
    var reportId = $('.report-table').attr('id');
    console.log(reportId);

    $.ajax({
        url: 'index.php?r=reportSelectorFunctionParaAction/applyfunctionAction&reportId=' + reportId,
        type: 'GET',
        dataType: 'json', // Expecting plain text response
        success: function(response) {
            // Parse the JSON response
            console.log(response);

            // Iterate through each script in the response array
            for (var i = 0; i < response.length; i++) {
                // Replace HTML line breaks with actual line breaks
                var scriptContent = response[i].replace(/<br\s*\/?>/mg,"\n");
                
                // Append the script to the body
                $("body").append("<script>" + scriptContent + "</script>");
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching scripts:', error);
        }
    });
});
