const fontSizeInput = document.getElementById("fontSizeInput");
        const fontSizeSlider = document.getElementById("fontSizeSlider");

        fontSizeInput.addEventListener("input", () => {
            fontSizeSlider.value = fontSizeInput.value;
            updateFontSize();
        });

        fontSizeSlider.addEventListener("input", () => {
            fontSizeInput.value = fontSizeSlider.value;
            updateFontSize();
        });

        function updateFontSize() {
            const fontSize = fontSizeInput.value + "px";
            document.getElementById("themePreview").style.fontSize = fontSize;
        }