$(document).ready(function() {
  $(window).on('load', function() {
    $.ajax({
      url: 'index.php?r=formtheme/textCSSProperties',
      type: 'GET',
      dataType: 'text',
      success: function(response) {
        // Split the response into individual CSS rules
        var cssRules = response.split('}');
        var modifiedResponse = '';

        // Add !important to each CSS rule for h1, h2, h3, and body
        for (var i = 0; i < cssRules.length; i++) {
          var cssRule = cssRules[i].trim();
          if (cssRule !== '') {
            // Add !important to each property in the rule
            var modifiedRule = cssRule.replace(/;/g, ' !important;');
            modifiedResponse += modifiedRule + '}';
          }
        }

        // Create a style element
        var styleElement = document.createElement('style');
        styleElement.type = 'text/css';

        // Create a text node containing the modified response
        var cssText = document.createTextNode(modifiedResponse);
        styleElement.appendChild(cssText);

        // Append the style element to the document head
        document.head.appendChild(styleElement);

        console.log('CSS styles with !important applied to the page.');
      },
      error: function(jqXHR, textStatus, errorThrown) {
//        console.error('AJAX request for text CSS failed:', textStatus, errorThrown);
      }
    });
  });
});




//$(document).ready(function() {
//  $(window).on('load', function() {
//    var controllerName = $("#controllerId").val();
//    var actionName = $("#actionId").val();
//
//    $.ajax({
//      url: 'index.php?r=formtheme/textCSSProperties',
//      type: 'GET',
//      data: { controller: controllerName, action: actionName },
//      dataType: 'text',
//      success: function(response) {
//        var trimmedResponse = response.slice(1, -1);
//        console.log('Text CSS Properties:', trimmedResponse);
//        applyTextCSSStyles(trimmedResponse); // Use trimmedResponse here
//      },
//      error: function(jqXHR, textStatus, errorThrown) {
//        console.error('AJAX request for text CSS failed:', textStatus, errorThrown);
//      }
//    });
//
//    function applyTextCSSStyles(cssText) {
////      console.log('Applying Text CSS Properties:', cssText);
////
//      var styleElement = document.createElement('style');
//      styleElement.type = 'text/css';
//      styleElement.appendChild(document.createTextNode(cssText));
//      document.head.appendChild(styleElement);
//    }
//  });
//});




//$(document).ready(function() {
//    var cssStyles = `
//        h1 {font-size: 20px; color: #664242; font-family: Verdana, Geneva, sans-serif; text-align: center; text-decoration: underline;}
//        h2 {font-size: 18px; color: #000000; font-family: Courier New, Courier, monospace; text-align: center; text-decoration: underline;}
//        h3 {font-size: 16px; color: #d54848; font-family: Courier New, Courier, monospace; text-align: center; text-decoration: underline;}
//        body {font-size: 20px; color: #5a7ac4; font-family: Courier New, Courier, monospace; text-align: right; text-decoration: overline;}
//        p {font-size: 12px; color: #61ca44; font-family: Courier New, Courier, monospace; text-align: right; text-decoration: underline;}
//    `;
//
//    // Create a <style> element
//    var styleElement = document.createElement('style');
//    styleElement.type = 'text/css';
//    styleElement.appendChild(document.createTextNode(cssStyles));
//
//    // Append the <style> element to the <head>
//    document.head.appendChild(styleElement);
//});
