function applyTextCSSStyles(cssText) {
    // Modify the CSS styles to target body h1
    cssText = cssText.replace(/h1\s*{/g, 'body h1 {');

//    console.log('Applying Text CSS Properties:', cssText);

    var styleElement = document.createElement('style');
    styleElement.type = 'text/css';
    styleElement.appendChild(document.createTextNode(cssText));
    document.head.appendChild(styleElement);
}

$(document).ready(function() {
    // Event handler for page load
    $(window).on('load', function() {
        var controllerName = $("#controllerId").val();
        var actionName = $("#actionId").val();

        // Make the AJAX request to fetch CSS properties
        $.ajax({
            url: 'index.php?r=formtheme/customProperties',
            type: 'GET',
            data: { controllerId: controllerName, actionId: actionName },
            dataType: 'text',
            success: function(response) {
                // Modify the CSS styles to target body h1
                response = response.replace(/h1\s*{/g, ' h1 {');

//                console.log('Applying Text CSS Properties:', response);

                // Call the function to apply the CSS styles to the form
                applyTextCSSStyles(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Handle the error case for fetching CSS properties
                console.error('AJAX request failed:', textStatus, errorThrown);
            }
        });
    });
});
