<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>
<style>
/* Style the tab */
.tab {
  overflow: hidden;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: #f1f1f1;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 10px 20px;
  transition: 0.3s;
}

/* Change background color of the tab buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
 .tabcontent {
    border: 1px solid #ccc;
    padding: 10px;
  }
</style>
<h1>CSS Input View Tab hii </h1>

<div class="tab">
  <button class="tablinks" onclick="openCss(event, 'BoxModel')">Box Model</button>
  <button class="tablinks" onclick="openCss(event, 'Font')">Font</button>
  <button class="tablinks" onclick="openCss(event, 'Background')">Background</button>
  <button class="tablinks" onclick="openCss(event, 'Border')">Border</button>
    <button class="tablinks" onclick="openCss(event, 'TransitionProperties')">Transition Properties</button>

  <button class="tablinks" onclick="openCss(event, 'Outline')">Outline</button>
<!--  <button class="tablinks" onclick="openCss(event, 'Link')">Link</button>
  <button class="tablinks" onclick="openCss(event, 'Grid')">Grid</button>-->
<!--  <button class="tablinks" onclick="openCss(event, 'Icon')">Icon</button>-->
    <button class="tablinks" onclick="openCss(event, 'Tab')">Tab</button>
        <button class="tablinks" onclick="openCss(event, 'Icon')">Icon</button>

    

</div>

<div id="BoxModel" class="tabcontent">
  <table>
    <!-- Box Model properties -->
     <tr>
        <td>Height:</td>
        <td><?php echo $theme->height; ?></td>
    </tr>
    <tr>
        <td>Width:</td>
        <td><?php echo $theme->width; ?></td>
    </tr>
    <tr>
        <td>Margin:</td>
        <td><?php echo $theme->margin; ?></td>
    </tr>
    
    <tr>
        <td>Padding:</td>
        <td><?php echo $theme->padding; ?></td>
    </tr>
    <tr>
        <td>Display:</td>
        <td><?php echo $theme->display; ?></td>
    </tr>
    <tr>
        <td>Clear:</td>
        <td><?php echo $theme->clear; ?></td>
    </tr>
    <tr>
        <td>Position:</td>
        <td><?php echo $theme->position; ?></td>
    </tr>
    <tr>
        <td>Resize:</td>
        <td><?php echo $theme->resize; ?></td>
    </tr>
    <tr>
        <td>Box Shadow:</td>
        <td><?php echo $theme->box_shadow; ?></td>
    </tr>
    <tr>
        <td>Box Sizing:</td>
        <td><?php echo $theme->box_sizing; ?></td>
    </tr>
  </table>
</div>

<div id="Font" class="tabcontent">
  <table>
    <!-- Font and Text properties -->
    <tr>
      <td>Color:</td>
      <td><?php echo $theme->color; ?></td>
    </tr>
     <tr>
      <td>Font Size:</td>
      <td><?php echo $theme->font_size; ?></td>
    </tr>
    <tr>
      <td>Font Family:</td>
      <td><?php echo $theme->font_family; ?></td>
    </tr>
    <tr>
      <td>Font Style:</td>
      <td><?php echo $theme->font_style; ?></td>
    </tr>
    <tr>
      <td>Text Wrap:</td>
      <td><?php echo $theme->text_wrap ?></td>
    </tr>
    <tr>
      <td>Text Shadow:</td>
      <td><?php echo $theme->text_shadow; ?></td>
    </tr>
<!--    <tr>
      <td>Text Indent:</td>
      <td><?php echo $theme->text_indent ?></td>
    </tr>-->
<!--    <tr>
      <td>Text Decoration:</td>
      <td><?php echo $theme->text_decoration; ?></td>
    </tr>
    <tr>
      <td>Text Overflow:</td>
      <td><?php echo $theme->text_overflow; ?></td>
    </tr>
        <tr>
      <td>Text Orientation:</td>
      <td><?php echo $theme->text_orientation ?></td>
    </tr>-->
    <!-- Add more text properties here -->
  </table>
</div>

<div id="Background" class="tabcontent">
  <table>
    <!-- Background properties -->
    <tr>
      <td>Background Color:</td>
      <td><?php echo $theme->background_color; ?></td>
    </tr>
    <tr>
      <td>Background Image:</td>
      <td><?php echo $theme->background_image; ?></td>
    </tr>
    <tr>
      <td>Background Repeat:</td>
      <td><?php echo $theme->background_repeat ?></td>
    </tr>
    <!-- Add more background properties here -->
  </table>
</div>

<div id="Border" class="tabcontent">
  <table>
    <!-- Border properties --><tr>
      <td>Border :</td>
      <td><?php echo $theme->border; ?></td>
    </tr>
    <tr>
      <td>Border Width:</td>
      <td><?php echo $theme->border_width; ?></td>
    </tr>
    
    <tr>
      <td>Border Radius:</td>
      <td><?php echo $theme->border_radius; ?></td>
    </tr>
     <tr>
      <td>Border Width:</td>
      <td><?php echo $theme->border_color ?></td>
    </tr>
    <tr>
      <td>Border Style:</td>
      <td><?php echo $theme->border_style; ?></td>
    </tr>
    <tr>
 </table>
    </div>
<div id="TransitionProperties" class="tabcontent">
  <table>
    <!-- Opacity property -->
    <tr>
      <td>Opacity:</td>
      <td><?php echo $theme->opacity; ?></td>
    </tr>
    
    <!-- Transition property -->
    <tr>
      <td>Transition Property:</td>
      <td><?php echo $theme->transition_property; ?></td>
    </tr>
    
    <!-- Box shadow property -->
    <tr>
      <td>Box Shadow:</td>
      <td><?php echo $theme->box_shadow; ?></td>
    </tr>
    
    <!-- Transition duration property -->
    <tr>
      <td>Transition Duration:</td>
      <td><?php echo $theme->transition_duration; ?></td>
    </tr>
    
    <!-- Transition timing function property -->
    <tr>
      <td>Transition Timing Function:</td>
      <td><?php echo $theme->transition_timing_function; ?></td>
    </tr>
    
    <!-- Add more properties here -->
    
  </table>
</div>


<div id="Outline" class="tabcontent">
  <table>
     <tr>
    <td>Outline Color:</td>
    <td><?php echo $theme->outline_color; ?></td>
  </tr>
  <tr>
    <td>Outline Style:</td>
    <td><?php echo $theme->outline_style; ?></td>
  </tr>
  <tr>
    <td>Outline Width:</td>
    <td><?php echo $theme->outline_width; ?></td>
  </tr>
  
  <tr>
      <td>Outline Color</td>
      <td><?php echo $theme->outline_color ?></td>
  </tr>
  <tr>
    <td>Outline Style:</td>
    <td><?php echo $theme->outline_style; ?></td>
  </tr>
  <tr>
    <td>Outline Width:</td>
    <td><?php echo $theme->outline_width; ?></td>
  </tr>
  </table>
</div>
<div id="Link" class="tabcontent">
    <table>
      <tr>
    <td>Link Color:</td>
    <td><?php echo $theme->link_color; ?></td>
  </tr>
  <tr>
    <td>Visited Link Color:</td>
    <td><?php echo $theme->visited; ?></td>
  </tr>
  <tr>
    <td>Hover Link Color:</td>
    <td><?php echo $theme->hover; ?></td>
  </tr>
  
         
    </table>
 
    
</div>

<div id="Grid" class="tabcontent">
  <table>
    <!-- Grid properties -->
    <tr>
      <td>Grid Template Columns:</td>
      <td><?php echo $theme->grid_template_columns; ?></td>
    </tr>
    <tr>
      <td>Grid Template Rows:</td>
      <td><?php echo $theme->grid_template_rows; ?></td>
    </tr>
    <tr>
      <td>Grid Template Areas:</td>
      <td><?php echo $theme->grid_template_areas; ?></td>
    </tr>
    <tr>
      <td>Grid Gap:</td>
      <td><?php echo $theme->grid_gap; ?>px</td>
    </tr>
    <tr>
      <td>Justify Items:</td>
      <td><?php echo $theme->justify_items; ?></td>
    </tr>
    <tr>
      <td>Align Items:</td>
      <td><?php echo $theme->align_items; ?></td>
    </tr>
    <tr>
      <td>Grid Auto Columns:</td>
      <td><?php echo $theme->grid_auto_columns; ?></td>
    </tr>
    <tr>
      <td>Grid Auto Rows:</td>
      <td><?php echo $theme->grid_auto_rows; ?></td>
    </tr>
    <tr>
      <td>Grid Auto Flow:</td>
      <td><?php echo $theme->grid_auto_flow; ?></td>
    </tr>
    <tr>
      <td>Grid Column:</td>
      <td><?php echo $theme->grid_column_start; ?></td>
    </tr>
    <tr>
      <td>Grid Row:</td>
      <td><?php echo $theme->grid_column_start; ?></td>
    </tr>
    <tr>
      <td>Grid Area:</td>
      <td><?php echo $theme->grid_area; ?></td>
    </tr>
  

<tr>
  <td>Grid Template:</td>
  <td><?php echo $theme->grid_template; ?></td>
</tr>
<tr>
  <td>Grid Row Gap:</td>
  <td><?php echo $theme->grid_row_gap; ?>px</td>
</tr>
<tr>
  <td>Grid Column Gap:</td>
  <td><?php echo $theme->grid_column_gap; ?>px</td>
</tr>
<tr>
  <td>Grid Row End:</td>
  <td><?php echo $theme->grid_row_end; ?></td>
</tr>
<tr>
  <td>Grid Column End:</td>
  <td><?php echo $theme->grid_column_end; ?></td>
</tr>
<tr>
  <td>Grid Template Rows (Mobile):</td>
  <td><?php echo $theme->grid_template_rows_mobile; ?></td>
</tr>
<tr>
  <td>Grid Template Columns (Mobile):</td>
  <td><?php echo $theme->grid_template_columns_mobile; ?></td>
</tr>
<tr>
  <td>Grid Template Areas (Mobile):</td>
  <td><?php echo $theme->grid_template_areas_mobile; ?></td>
</tr>
<tr>
  <td>Grid Template (Mobile):</td>
  <td><?php echo $theme->grid_template_mobile; ?></td>
</tr>
<tr>
  <td>Grid Row Gap (Mobile):</td>
  <td><?php echo $theme->grid_row_gap_mobile; ?>px</td>
</tr>
<tr>
  <td>Grid Column Gap (Mobile):</td>
  <td><?php echo $theme->grid_column_gap_mobile; ?>px</td>
</tr>
<tr>
  <td>Grid Gap (Mobile):</td>
  <td><?php echo $theme->grid_gap_mobile; ?>px</td>
</tr>
<tr>
  <td>Grid Auto Rows (Mobile):</td>
  <td><?php echo $theme->grid_auto_rows_mobile; ?></td>
</tr>
<tr>
  <td>Grid Auto Columns (Mobile):</td>
  <td><?php echo $theme->grid_auto_columns_mobile; ?></td>
</tr>
<tr>
  <td>Grid Auto Flow (Mobile):</td>
  <td><?php echo $theme->grid_auto_flow_mobile; ?></td>
</tr>
<tr>
  <td>Grid Mobile:</td>
  <td><?php echo $theme->grid_mobile; ?></td>
</tr>
<tr>
  <td>Grid Row Start (Mobile):</td>
  <td><?php echo $theme->grid_row_start_mobile; ?></td>
</tr>
<tr>
  <td>Grid Column Start (Mobile):</td>
  <td><?php echo $theme->grid_column_start_mobile; ?></td>
</tr>
<tr>
  <td>Grid Row End (Mobile):</td>
  <td><?php echo $theme->grid_row_end_mobile; ?></td>
</tr>
<tr>
  <td>Grid Column End (Mobile):</td>
  <td><?php echo $theme->grid_column_end_mobile; ?></td>
</tr>
<tr>
  <td>Grid Area (Mobile):</td>
  <td><?php echo $theme->grid_area_mobile; ?></td>
</tr>
  </table>
</div>
 <div id="Icon" class="tabcontent">
    <table>
      <tr>
    <td>Icon </td>
    <td><?php echo $theme->icon; ?></td>
  </tr>
  <tr>
    <td>Icon Size </td>
    <td><?php echo $theme->icon_size; ?> px</td>
  </tr>
  </table>
</div>
<div id="Tab" class="tabcontent">
  <h3>Tab Properties</h3>
  <table>
    <tr>
      <td>Tab Border Width:</td>
      <td><?php echo $theme->tab_border_width; ?></td>
    </tr>
    <tr>
      <td>Tab Padding:</td>
      <td><?php echo $theme->tab_padding; ?></td>
    </tr>
    <tr>
      <td>Tab Margin:</td>
      <td><?php echo $theme->tab_margin; ?></td>
    </tr>
    <tr>
      <td>Tab Font Color:</td>
      <td><?php //echo $theme->tab_font_color; ?></td>
    </tr>
    <tr>
      <td>Tab Font Size:</td>
      <td><?php echo $theme->tab_font_size; ?></td>
    </tr>
    <tr>
      <td>Tab Font Weight:</td>
      <td><?php echo $theme->tab_font_weight; ?></td>
    </tr>
    <tr>
      <td>Tab Text Transform:</td>
      <td><?php echo $theme->tab_text_transform; ?></td>
    </tr>
    <tr>
      <td>Tab Text Decoration:</td>
      <td><?php echo $theme->tab_text_decoration; ?></td>
    </tr>
  </table>
</div>

    <!-- Add more border properties here -->
  


<script>
// Function to switch tabs and display content
  function openCss(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the active class
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Set the first tab as active by default
 // document.getElementsByClassName("tablinks")[0].click();
 function setDefaultTab() {
    var firstTab = document.getElementsByClassName('tablinks')[0];
    firstTab.click();
  }

  // Add an event listener to execute the function when the page finishes loading
  window.addEventListener('load', setDefaultTab)
</script>
