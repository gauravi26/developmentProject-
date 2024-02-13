$(document).ready(function() {
    // Get the ID of the div with class "form"
    var formId = $('.form').attr('id');
console.log(formId);
    // Make AJAX request with form ID
    $.ajax({
        url: 'index.php?r=formFieldCsspropertyValueMapping/applyStylesToFormElement&formID=' + formId,
        type: 'GET',
        dataType: 'text', // Expecting plain text response
        success: function(response) {
            // Remove leading and trailing double quotes from the response
            response = response.replace(/^"|"$/g, '');

            // Wrap the response in a <style> tag and append it to the <head>
            var styleElement = $('<style>').text(response);
            $('head').append(styleElement);
            console.log("style tag is appended")
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // Handle the error case here
            console.error('AJAX request failed:', textStatus, errorThrown);
        }
    });
});
