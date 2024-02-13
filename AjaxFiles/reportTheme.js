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
        url: 'index.php?r=reporttheme/applyReportTheme',
        type: 'GET',
        dataType: 'json', // Change the data type to 'json'
        data: { controller: controller, action: action },
        success: function (data) {
            // Iterate over each selector and generate the CSS rules
            data.forEach(function (selectorStyles) {
                Object.keys(selectorStyles).forEach(function (selector) {
                    var styles = selectorStyles[selector];

                    // Construct the CSS rule for normal state
                    var cssRuleNormal = selector + ' {\n' +
                        styles.split(';').map(function (style) {
                            var propertyValue = style.trim();
                            if (propertyValue !== '') {
                                return `  ${propertyValue};`;
                            }
                            return '';
                        }).join('\n') +
                        '\n}\n';

                    // Construct the CSS rule for hover state
                    var hoverSelector = selector + ':hover';
                    if (!selector.includes(':hover') && styles.includes(':hover')) {
                        hoverSelector = selector + ':hover';
                    }

                    var cssRuleHover = hoverSelector + ' {\n' +
                        styles.split(';').map(function (style) {
                            var propertyValue = style.trim();
                            if (propertyValue !== '') {
                                return `  ${propertyValue.replace(':hover', '')};`;
                            }
                            return '';
                        }).join('\n') +
                        '\n}\n';

                    // Combine normal and hover state rules
                    var combinedCssRule = cssRuleNormal + '\n\n' + cssRuleHover;

                    // Log the result (you can also append this to a style tag in the head)
//                    console.log("CSS Rule:", combinedCssRule);

                    // Append the CSS rule to the head of the document
                    var styleElement = $('<style>').text(combinedCssRule);
                    console.log(styleElement.prop('outerHTML'));


                    $('head').append(styleElement);
                });
            });
        },
        error: function (xhr, status, error) {
            // Handle the error, if any
            console.error("Error fetching CSS properties:", status, error);
        }
    });
}
