<?php$selectedTheme = Yii::app()->session['selectedTheme'];
if (is_array($selectedTheme)) {
    // Iterate over each form element and its properties
    foreach ($selectedTheme as $formElement => $properties) {
        $style = '';
        // Iterate over each CSS property and its value
        foreach ($properties as $property => $value) {
            $style .= "$property: $value; ";
        }
        // Apply the inline style to the form element
        echo "<div class='$formElement' style='$style'>";
        // Render the form element here
        echo "</div>";
    }
} else {
    // Handle the case when $selectedTheme is not an array
    echo "No theme selected.";
}
?>