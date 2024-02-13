/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */



$(document).ready(function() {
    // Event handler for page load
    $(window).on('load', function() {
        // Make the AJAX request to fetch CSS properties
        var controllerName = $("#controllerId").val();
        var actionName = $("#actionId").val();

        $.ajax({
            url: 'index.php?r=formthememapping/applyElementCssProperties',
            type: 'GET',
            dataType: 'text',
            data: { controller: controllerName, action: actionName },

            success: function(response) {
                // Handle the success response here
                // You can access the returned CSS string from the 'response' variable

                // Create a <style> element and append the CSS styles to it
                var styleElement = $('<style>').text(response);
                $('head').append(styleElement);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Handle the error case here
                console.error('AJAX request failed:', textStatus, errorThrown);
            }
        });
    });
});


