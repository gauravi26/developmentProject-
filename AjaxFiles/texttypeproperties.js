$(window).on('load', function() {
    var controllerName = $("#controllerId").val();
    var actionName = $("#actionId").val();

    $.ajax({
        url: 'index.php?r=formtheme/finalTextStyles',
        type: 'GET',
        dataType: 'json',
        data: { controller: controllerName, action: actionName },

        success: function(response) {
            console.log(response);

            // Construct CSS rules from the JSON response
            var cssRules = '';
            for (var selector in response.css) {
                if (response.css.hasOwnProperty(selector)) {
                    cssRules += selector + ' {\n';
                    for (var property in response.css[selector]) {
                        if (response.css[selector].hasOwnProperty(property)) {
                            cssRules += '  ' + property + ': ' + response.css[selector][property] + ';\n';
                        }
                    }
                    cssRules += '}\n\n';
                }
            }

            // Create a style element
            var styleElement = document.createElement('style');
            styleElement.type = 'text/css';

            // Create a text node containing the constructed CSS rules
            var cssText = document.createTextNode(cssRules);
            styleElement.appendChild(cssText);

            // Append the style element to the document head
            document.head.appendChild(styleElement);

            console.log('CSS styles applied to the page.');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('AJAX request failed:', textStatus, errorThrown);
        }
    });
});
