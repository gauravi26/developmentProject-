const formatCSS = (cssString) => {
    // Replace 'url('url(' with 'url(' and ')' with ')'
    cssString = cssString.replace(/url\('url\('/g, "url('").replace(/'\)'/g, "')");
    return cssString;
};

// Event handler for page load
$(window).on('load', function() {
    // Make the AJAX request to fetch CSS properties
    var controllerName = $("#controllerId").val();
    var actionName = $("#actionId").val();

    $.ajax({
        url: 'index.php?r=formthememapping/applyThemeToForms',
        type: 'GET',
        dataType: 'json', // Update the data type to 'json' since the response is JSON
        data: { controller: controllerName, action: actionName },

        success: function(response) {
            // Set a flag to indicate that the page-specific theme has been applied
            pageSpecificThemeApplied = true;

            console.log('Response:', response); // Log the response to the console
            
            // Apply styles using the appropriate selector (e.g., .span-19)
            if (response && response.css) {
                const formattedCSS = formatCSS(response.css);
                $('.span-19').css('cssText', formattedCSS);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // Handle the error case here
            console.error('AJAX request failed:', textStatus, errorThrown);
        }
    });
});
