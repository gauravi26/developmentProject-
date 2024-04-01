$(document).ready(function() {
    // Event handler for page load
    var controllerName = $("#controllerId").val();
    var actionName = $("#actionId").val();

    $.ajax({
        url: 'index.php?r=effects/applyScript&controller=' + controllerName + '&action=' + actionName,
        method: 'GET',
        success: function(response) {
            // Log the response for debugging
            console.log(response);

            // Loop through each key in the response object
            Object.keys(response).forEach(function(key) {
                // Access the array of effect objects associated with each key
                var effects = response[key];

                // Loop through each effect object in the array
                effects.forEach(function(effectData) {
                    var cssCode = effectData.code.css;
                    var jsCode = effectData.code.js;

                    // Append CSS to the head tag
                    $('head').append('<style>' + cssCode + '</style>');

                    // Create a script element
                    var scriptElement = document.createElement('script');
                    scriptElement.type = 'text/javascript';

                    // Set the script content
                    scriptElement.textContent = jsCode;

                    // Append the script to the body
                    document.body.appendChild(scriptElement);
                });
            });
        },
        error: function(xhr, status, error) {
            // Handle the error, if any
            console.log('Error:', status, error);
        }
    });
});
