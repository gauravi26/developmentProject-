$.ajax({
    url: 'index.php?r=formtheme/applyThemeToForms',
    type: 'GET',
    success: function(response) {
        // Split the response into individual JSON objects
        const jsonResponseArray = response.split('}{');

        // Function to format the CSS properties
        const formatCSS = (cssString) => {
            // Replace 'url('url(' with 'url(' and ')' with ')'
            cssString = cssString.replace(/url\('url\('/g, "url('").replace(/'\)'/g, "')");
            return cssString;
        };

        // Parse and apply styles for each JSON object
        jsonResponseArray.forEach((jsonStr, index) => {
            const json = JSON.parse((index === 0 ? '' : '{') + jsonStr + (index === jsonResponseArray.length - 1 ? '' : '}'));
            
            // Apply styles using the appropriate selector (e.g., .span-19)
            if (json && json.css) {
                const formattedCSS = formatCSS(json.css);
                $('.span-19').css('cssText', formattedCSS);
            }
        });
    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.error('AJAX request failed:', textStatus, errorThrown);
    }
});
