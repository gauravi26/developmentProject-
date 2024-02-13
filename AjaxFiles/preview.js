 document.addEventListener("DOMContentLoaded", function () {
    // Get references to form input fields
    const themeForm = document.getElementById('themeform');
    const themePreview = document.getElementById('themePreview');
    const formPreview = document.getElementById('formPreview'); // Create a separate preview element for the form

    // Function to update the "Box Model" properties
    function updateBoxModelProperties() {
      formPreview.style.height = themeForm.height.value + "px";
      formPreview.style.width = themeForm.width.value + "px";
//            formPreview.style.margin = themeForm.margin.value + "px";
//            formPreview.style.padding = themeForm.padding.value + "px";

//      formPreview.style.margin = `${themeForm.margin_top.value}px ${themeForm.margin_right.value}px ${themeForm.margin_bottom.value}px ${themeForm.margin_left.value}px`;
//      formPreview.style.padding = `${themeForm.padding_top.value}px ${themeForm.padding_right.value}px ${themeForm.padding_bottom.value}px ${themeForm.padding_left.value}px`;
      formPreview.style.display = themeForm.display_property.value;
      formPreview.style.clear = themeForm.clear.value;
      formPreview.style.boxSizing = themeForm.box_sizing.value;
      formPreview.style.position = themeForm.position.value;
    }


    // Function to update margin and padding properties
    function updateMarginPadding() {
        const marginInput = document.getElementById('marginInput');
        const paddingInput = document.getElementById('paddingInput');
        const slider = document.getElementById('slider');

        // Update margin and padding input values
        marginInput.value = `${slider.value}px`;
        paddingInput.value = `${slider.value}px`;

        // Update the preview element with margin and padding
        formPreview.style.margin = `${slider.value}px`;
        formPreview.style.padding = `${slider.value}px`;
    }

    // Add event listener to update margin and padding when the slider is moved
    document.getElementById('slider').addEventListener('input', function() {
        updateMarginPadding();
    });
    
    // Initialize the preview with default margin and padding values
    updateMarginPadding();


    // Function to update the "Text" properties
//   function updateTextProperties(textType) {
//  const previewElement = document.querySelector(`#themePreview ${textType}`);
//  if (previewElement) {
//    const fontSizeInput = document.querySelector(`#${textType}_font_size`);
//    const colorInput = document.querySelector(`[name=${textType}_color]`);
//    const fontFamily = document.querySelector(`#${textType}_font_family`);
//    const textAlignSelect = document.querySelector(`[name=${textType}_text_align]`);
////    const textShadow = document.querySelector(`#${textType}_text_shadow`);
//    const textDecoration = document.querySelector(`[name=${textType}_text_decoration]`);
//
//    previewElement.style.fontSize = fontSizeInput.value + "px";
//    previewElement.style.color = colorInput.value;
//    previewElement.style.fontFamily = fontFamily.value;
////    previewElement.style.textShadow = textShadow.value;
//    previewElement.style.textDecoration = textDecoration.value;
//
//    // Handle text alignment
//    if (textAlignSelect) {
//      const textAlignValue = textAlignSelect.value;
//      previewElement.style.textAlign = textAlignValue;
//    }
//  }
//}
//
//// Add event listeners for text type inputs
//const textTypeInputs = document.querySelectorAll('.nested-tabcontent input, .nested-tabcontent select');
//textTypeInputs.forEach(input => {
//  input.addEventListener('change', function () {
//    const textType = this.getAttribute('data-text-type');
//    if (textType) {
//      updateTextProperties(textType);
//    }
//  });
//});

// Function to update the text properties for various text types
function updateTextProperties(textType) {
  let previewElement;

  if (textType === 'body') {
    previewElement = document.getElementById('livePreviewContainer');
  } else {
    previewElement = document.querySelector(`#themePreview ${textType}`);
  }

  if (previewElement) {
    const fontSizeInput = document.querySelector(`#${textType}_font_size`);
    const colorInput = document.querySelector(`[name=${textType}_color]`);
    const fontFamily = document.querySelector(`#${textType}_font_family`);
    const textAlignSelect = document.querySelector(`[name=${textType}_text_align]`);
    const textDecoration = document.querySelector(`[name=${textType}_text_decoration]`);

    previewElement.style.fontSize = fontSizeInput.value + "px";
    previewElement.style.color = colorInput.value;
    previewElement.style.fontFamily = fontFamily.value;
    previewElement.style.textDecoration = textDecoration.value;

    // Handle text alignment
    if (textAlignSelect) {
      const textAlignValue = textAlignSelect.value;
      previewElement.style.textAlign = textAlignValue;
    }
  }
}

// Add event listeners for text type inputs
const textTypeInputs = document.querySelectorAll('.nested-tabcontent input, .nested-tabcontent select');
textTypeInputs.forEach(input => {
  input.addEventListener('input', function () {
    const textType = this.getAttribute('data-text-type');
    if (textType) {
      updateTextProperties(textType);
    }
  });
});


    // Function to update the "Background" properties
    function updateBackgroundProperties() {
      formPreview.style.backgroundColor = themeForm.background_color.value;
      formPreview.style.backgroundImage = `url('${themeForm.background_image.value}')`;
      formPreview.style.backgroundRepeat = themeForm.background_repeat.value;
    }

    function updateBorderProperties() {
    formPreview.style.border = `${themeForm.border_width.value}px ${themeForm.border_style.value} ${themeForm.border_color.value}`;
    formPreview.style.borderColor = themeForm.border_color.value;
    formPreview.style.borderWidth = `${themeForm.border_width.value}px`;
    formPreview.style.borderStyle = themeForm.border_style.value;
    formPreview.style.borderRadius = `${themeForm.border_radius.value}px`;

    }
    
    
function updateTransitionProperties() {
         const formPreview = document.getElementById('formPreview');

    formPreview.style.opacity = themeForm.opacity.value;
    formPreview.style.transitionProperty = themeForm.transition_property.value;
    formPreview.style.boxShadow = themeForm.box_shadow.value;
//  formPreview.style.transitionDuration = themeForm.transition_duration.value + "s";
//    formPreview.style.transitionTimingFunction = themeForm.transition_timing_function.value;
// 
// const duration = document.getElementById('transition_duration').value;
//        const timingFunction = document.getElementById('transition_timing_function').value;
//
//        formPreview.style.transitionDuration = duration;
//        formPreview.style.transitionTimingFunction = timingFunction;
}
 function updateOutlineProperties() {
    formPreview.style.outlineStyle = themeForm.outline_style.value;
    formPreview.style.outlineWidth = themeForm.outline_width.value + "px";
    formPreview.style.outlineColor = themeForm.outline_color.value;
}

function updateLinkProperties() {
    const specialLink = document.getElementById('specialLink'); // Select the link by its ID
    specialLink.style.color = themeForm.link_color.value;
    specialLink.style.setProperty('visitedLinkColor', themeForm.visited.value, 'important');
    specialLink.style.setProperty('hoverLinkColor', themeForm.hover.value, 'important');
}
function updateBackgroundProperties() {
  formPreview.style.backgroundColor = themeForm.background_color.value;
  formPreview.style.backgroundRepeat = themeForm.background_repeat.value;
    formPreview.style.backgroundPosition= themeForm.background_position.value;

  const backgroundImageInput = document.getElementById('background_image');
  const selectedFile = backgroundImageInput.files[0];

  // Check if a file is selected
  if (selectedFile) {
    // Create a FileReader to read the selected file
    const reader = new FileReader();

    // Set up a function to run when the file is loaded
    reader.onload = function (e) {
      // Update the background image with the loaded file data
      formPreview.style.backgroundImage = `url('${e.target.result}')`;
    };

    // Read the selected file as a data URL
    reader.readAsDataURL(selectedFile);
  } else {
    // No file selected, reset the background image
    formPreview.style.backgroundImage = 'none';
  }
}
  function updateListProperties() {
//    const listStyle = document.getElementById('list_style').value;
    const listStyleType = document.getElementById('list_style_type').value;
    const listStylePosition = document.getElementById('list_style_position').value;

    const ulElement = document.querySelector("#formPreview ul");

    if (ulElement) {
      ulElement.style.listStyle = listStyle;
      ulElement.style.listStyleType = listStyleType;
      ulElement.style.listStylePosition = listStylePosition;
    }
  }





function updateIconProperties() {
    const iconElement = document.getElementById('icon1'); // Select the icon element by its ID
    iconElement.style.color = themeForm.icon_color.value;
    iconElement.style.fontSize = themeForm.icon_size.value + "px";
}
// Function to update the "Tab3" properties
//function updateTabProperties() {
//  const tab3Content = document.getElementById('tabPreview');
//
//  tab3Content.style.backgroundColor = themeForm.tab_background_color.value;
//  tab3Content.style.borderColor = themeForm.tab_border_color.value;
//  tab3Content.style.borderWidth = themeForm.tab_border_width.value + "px";
//  tab3Content.style.padding = themeForm.tab_padding.value + "px";
//  tab3Content.style.margin = themeForm.tab_margin.value + "px";
//  tab3Content.style.color = themeForm.tab_font_color.value;
//  tab3Content.style.fontSize = themeForm.tab_font_size.value + "px";
//  tab3Content.style.fontWeight = themeForm.tab_font_weight.value;
//  tab3Content.style.textTransform = themeForm.tab_text_transform.value;
//  tab3Content.style.textDecoration = themeForm.tab_text_decoration.value;
//}


    // Add event listeners for "Box Model" form input fields
    themeForm.height.addEventListener("input", updateBoxModelProperties);
    themeForm.width.addEventListener("input", updateBoxModelProperties);
//        themeForm.margin.addEventListener("input", updateBoxModelProperties);

//    themeForm.margin_top.addEventListener("input", updateBoxModelProperties);
//    themeForm.margin_right.addEventListener("input", updateBoxModelProperties);
//    themeForm.margin_bottom.addEventListener("input", updateBoxModelProperties);
//    themeForm.margin_left.addEventListener("input", updateBoxModelProperties);
//    themeForm.padding.addEventListener("input", updateBoxModelProperties);

//    themeForm.padding_top.addEventListener("input", updateBoxModelProperties);
//    themeForm.padding_right.addEventListener("input", updateBoxModelProperties);
//    themeForm.padding_bottom.addEventListener("input", updateBoxModelProperties);
//    themeForm.padding_left.addEventListener("input", updateBoxModelProperties);
    themeForm.display_property.addEventListener("input", updateBoxModelProperties);
    themeForm.clear.addEventListener("input", updateBoxModelProperties);
    themeForm.box_sizing.addEventListener("input", updateBoxModelProperties);
    themeForm.position.addEventListener("input", updateBoxModelProperties);

    // Add event listeners for "Text" form input fields
//    themeForm.color.addEventListener("input", updateTextProperties);
//    themeForm.font_size.addEventListener("input", updateTextProperties);
//    themeForm.font_family.addEventListener("input", updateTextProperties);
//    themeForm.text_align.addEventListener("input", updateTextProperties);
////    themeForm.text_shadow_select.addEventListener("input", updateTextProperties);
//    themeForm.text_decoration.addEventListener("input", updateTextProperties);

    // Add event listeners for "Background" form input fields
    themeForm.background_color.addEventListener("input", updateBackgroundProperties);
    themeForm.background_image.addEventListener("input", updateBackgroundProperties);
    themeForm.background_repeat.addEventListener("input", updateBackgroundProperties);
        themeForm.background_position.addEventListener("input", updateBackgroundProperties);

    /////////////Border ////////////////////////////////
    themeForm.border_style.addEventListener("input", updateBorderProperties);
    themeForm.border_width.addEventListener("input", updateBorderProperties);
    themeForm.border_radius.addEventListener("input", updateBorderProperties);
    themeForm.border_color.addEventListener("input", updateBorderProperties);
    
    ////////////////////Transition /////////////////////////
    
    themeForm.opacity.addEventListener("input", updateTransitionProperties);
    themeForm.transition_property.addEventListener("input", updateTransitionProperties);
    themeForm.box_shadow.addEventListener("input", updateTransitionProperties);
//    themeForm.transition_duration.addEventListener("input", updateTransitionProperties);
//    themeForm.transition_timing_function.addEventListener("input", updateTransitionProperties);
//formPreview.addEventListener('input', updateTransitionProperties);
//    formPreview.addEventListener('change', updateTransitionProperties);

      // Add event listeners for "Outline" form input fields
    themeForm.outline_style.addEventListener("input", updateOutlineProperties);
    themeForm.outline_width.addEventListener("input", updateOutlineProperties);
    themeForm.outline_color.addEventListener("input", updateOutlineProperties);

    // Add event listeners for "Link" form input fields
    themeForm.link_color.addEventListener("input", updateLinkProperties);
   themeForm.visited.addEventListener("input", () => {
    const customLink = document.querySelector('.custom-link');
    customLink.style.setProperty('color', themeForm.visited.value, 'important');
});

themeForm.hover.addEventListener("input", () => {
    const customLink = document.querySelector('.custom-link');
    customLink.style.setProperty('color', themeForm.hover.value, 'important');
});
    // Add event listeners for "Icon" form input fields
    themeForm.icon_color.addEventListener("input", updateIconProperties);
    themeForm.icon_size.addEventListener("input", updateIconProperties);
    
    //////////Tab/////////////////////
// Add event listeners for "Tab" form input fields
//themeForm.tab_background_color.addEventListener("input", updateTabProperties);
//themeForm.tab_border_color.addEventListener("input", updateTabProperties);
//themeForm.tab_border_width.addEventListener("input", updateTabProperties);
//themeForm.tab_padding.addEventListener("input", updateTabProperties);
//themeForm.tab_margin.addEventListener("input", updateTabProperties);
//themeForm.tab_font_color.addEventListener("input", updateTabProperties);
//themeForm.tab_font_size.addEventListener("input", updateTabProperties);
//themeForm.tab_font_weight.addEventListener("input", updateTabProperties);
//themeForm.tab_text_transform.addEventListener("input", updateTabProperties);
//themeForm.tab_text_decoration.addEventListener("input", updateTabProperties);


////////////////List //////////////////////
// Call the function when any of the list property inputs change
//  document.getElementById("list_style").addEventListener("change", updateListProperties);
//  document.getElementById("list_style_type").addEventListener("change", updateListProperties);
//  document.getElementById("list_style_position").addEventListener("change", updateListProperties);

///////////////////Background Image ////////////////////
themeForm.background_image.addEventListener("change", updateBackgroundProperties);
themeForm.background_repeat.addEventListener("change", updateBackgroundProperties);
//  themeForm.background_position.addEventListener("change", updateBackgroundProperties);
/////////////////////List///////////
//  document.getElementById('list_style').addEventListener("change", updateListProperties);
  document.getElementById('list_style_type').addEventListener("change", updateListProperties);
  document.getElementById('list_style_position').addEventListener("change", updateListProperties);

    // Initialize the preview with default styles
    updateBoxModelProperties();
//    updateTextProperties();
    updateBackgroundProperties();
    updateBorderProperties();
    updateTransitionProperties();
    updateOutlineProperties();
    updateLinkProperties();
//    updateTabProperties();
    updateListProperties();
updateBackgroundProperties();


  });