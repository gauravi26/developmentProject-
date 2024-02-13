$(document).ready(function() {
    // Event handler for page load
    var controllerName = $("#controllerId").val();
    var actionName = $("#actionId").val();

    $.ajax({
        url: 'index.php?r=effects/applyScript&controller=' + controllerName + '&action=' + actionName,
        method: 'GET',
        success: function(response) {
            // Log the response for debugging
            // console.log(response);

            // Loop through the response data
            $.each(response, function(index, effectData) {
                var elementId = effectData.title;
                var cssCode = effectData.code.css;
                var jsCode = effectData.code.js;
                
                // Replace "elementId" in the JavaScript code without '#' symbol
                jsCode = jsCode.replace(/'#elementId'/g, "'" + "#" + effectData.title + "'");
//                console.log(elementId)
                // Replace "elementId" in the JavaScript code with the actual element ID
               
               jsCode = jsCode.replace(/elementId/g, "\"" + elementId + "\"");
//                console.log(jsCode)

                // Replace "triggerValue" with the actual trigger value in the JavaScript code
                jsCode = jsCode.replace("triggerValue", effectData.trigger);
            
                // Replace "\n" with actual newlines
                jsCode = jsCode.replace(/\\n/g, '\n');

                // Append CSS to the header
                $('head').append('<style>' + cssCode + '</style');

                var scriptElement = document.createElement('script');
                scriptElement.innerHTML = jsCode;
                console.log(scriptElement)
                // Append the script to the body
                document.body.appendChild(scriptElement);
            });
        },
        error: function(xhr, status, error) {
            // Handle the error, if any
            console.log('Error:', status, error);
        }
    });
});
