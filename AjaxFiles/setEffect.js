$(document).ready(function() {
    $(window).on('load', function() {
        var controllerName = $("#controllerId").val();
        var actionName = $("#actionId").val();

        $.ajax({
            url: 'index.php?r=formtheme/applyEffect&controller=' + controllerName + '&action=' + actionName,
            method: 'GET',
            success: function (response) {
                // Parse the JSON response to get the effect content
                var responseObj = JSON.parse(response);
                var effectContent = responseObj.effect;

                // Inject the effect content into style and script tags
                $('head').append('<style>' + effectContent.css + '</style>');
                $('body').append('<script>' + effectContent.js + '</script>');
            },
            error: function (error) {
                console.log('Error:', error);
            }
        });
    });
});
