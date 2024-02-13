<!-- customupdateview.php -->
<!-- Implement the tab view structure -->
<style>
        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 30px;
        }
       
        label strong {
  font-size: 20px; /* or any other value you prefer */
}     .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

.tab button {
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 10px 12px;
  transition: 0.3s;
  font-size: 14px;
}

.label-bold {
  font-weight: bold;
}

.tab button:hover {
  background-color: #ddd;
}

.tab button.active {
  background-color: #ccc;
}

.tabcontent {
  border: 1px solid #ccc;
  padding: 10px;
}

.custom-select {
  width: 120px;
  height: 30px;
  font-size: 14px;
}

button,
input[type="button"],
input[type="submit"],
input[type="reset"] {
  height: 30px;
  font-size: 14px;
}

label {
  height: 30px;
  line-height: 30px;
  font-size: 14px;
}

select {
  height: 30px;
  font-size: 14px;
}

input[type="text"],
input[type="password"],
input[type="email"],
input[type="number"],
input[type="color"],
textarea {
  height: 30px;
  font-size: 14px;
}



    </style>
    
<div class="tab">
   <button class="tablinks" onclick="openTab(event, 'BoxModel')">Box Model</button>
  <button class="tablinks" onclick="openTab(event, 'Text')">Text</button>
  <button class="tablinks" onclick="openTab(event, 'Background')">Background</button>
  <button class="tablinks" onclick="openTab(event, 'Border')">Border</button>
  <button class="tablinks" onclick="openTab(event, 'Outline')">Outline</button>
  <button class="tablinks" onclick="openTab(event, 'Link')">Link</button>
  <button class="tablinks" onclick="openTab(event, 'Grid')">Grid</button>
  <button class="tablinks" onclick="openTab(event, 'Icon')">Icon</button>
  <button class="tablinks" onclick="openTab(event, 'List')">List</button>
  <button class="tablinks" onclick="openTab(event, 'Tab')">Tab</button>

    <!-- Add more tab links if needed -->
</div>

<!-- Implement the tab content for BoxModel -->
<div id="BoxModel" class="tabcontent">
   
    <form method="post">
        <label><strong>Box Model:</strong></label><br><br>
        <label class="label-bold">Theme Name:</label>
        <input type="text" name="Themes_theme_name" value="<?php echo $model->theme_name; ?>"><br><br>
        <label>Margin:</label><br>
         <input type="text" name="Themes_margin_top" value="<?php echo $model->margin_top; ?>"><br><br>
          <input type="text" name="Themes_margin_right" value="<?php echo $model->margin_right; ?>"><br><br>
                    <input type="text" name="Themes_margin_bottom" value="<?php echo $model->margin_bottom; ?>"><br><br>
                    <input type="text" name="Themes_margin_left" value="<?php echo $model->margin_left; ?>"><br><br>

        <label>Padding:</label><br>
        <input type="text" name="Themes_padding_top" value="<?php echo $model->padding_top; ?>"> px<br>
        <input type="text" name="Themes_padding_right" value="<?php echo $model->padding_right; ?>"> px<br>
        <input type="text" name="Themes_padding_bottom" value="<?php echo $model->padding_bottom; ?>"> px<br>
        <input type="text" name="Themes_padding_left" value="<?php echo $model->padding_left; ?>"> px<br><br>
        <label>Height:</label>
        <input type="text" name="Themes_height" value="<?php echo $model->height; ?>"> px<br><br>
        <label>Width:</label>
        <input type="text" name="Themes_width" value="<?php echo $model->width; ?>"> px<br><br>
        <label>Max Height:</label>
        <input type="text" name="Themes_max_height" value="<?php echo $model->max_height; ?>"> px<br><br>
        <label>Max Width:</label>
        <input type="text" name="Themes_max_width" value="<?php echo $model->max_width; ?>"> px<br><br>
        <label>Min Height:</label>
        <input type="text" name="Themes_min_height" value="<?php echo $model->min_height; ?>"> px<br><br>
        <label>Min Width:</label>
        <input type="text" name="Themes_min_width" value="<?php echo $model->min_width; ?>"> px<br><br>
        <label>Box Sizing:</label>
        <select name="Themes_box_sizing" class="custom-select">
            <option <?php if ($model->box_sizing == 'content-box') echo 'selected'; ?> value="content-box">Content Box</option>
            <option <?php if ($model->box_sizing == 'border-box') echo 'selected'; ?> value="border-box">Border Box</option>
        </select><br><br>
        <!-- Add other form fields -->
        <input type="submit" value="Save">
    </form>
</div>
<!-- Implement the tab content for Background -->
<!-- Implement the tab content for Background -->
<div id="Background" class="tabcontent">
    <h3>Background</h3>
    <form method="post">
        <label><strong>Background:</strong></label><br><br>
        <label>Background Color:</label>
        <input type="text" name="Themes_background_color" value="<?php echo $model->background_color; ?>"><br><br>
        <label>Background Image:</label>
        <input type="text" name="Themes_background_image" value="<?php echo $model->background_image; ?>"><br><br>
        <label>Background Repeat:</label>
        <select name="Themes_background_repeat" class="custom-select">
            <option <?php if ($model->background_repeat == 'repeat') echo 'selected'; ?> value="repeat">Repeat</option>
            <option <?php if ($model->background_repeat == 'no-repeat') echo 'selected'; ?> value="no-repeat">No Repeat</option>
            <option <?php if ($model->background_repeat == 'repeat-x') echo 'selected'; ?> value="repeat-x">Repeat Horizontally</option>
            <option <?php if ($model->background_repeat == 'repeat-y') echo 'selected'; ?> value="repeat-y">Repeat Vertically</option>
        </select><br><br>
        <!-- Add other background fields -->
        <input type="submit" value="Save">
    </form>
</div>
<div id="Text" class="tabcontent">
    <h3>Background</h3>
    <form method="post">
        <label><strong>Text:</strong></label><br><br>
        <label>Text Color:</label>
        <input type="text" name="Themes_text_color" value="<?php echo $model->text_color; ?>"><br><br>
        <label>Letter Spacing:</label>
        <input type="text" name="Themes_letter_spacing" value="<?php echo $model->letter_spacing; ?>"> px<br><br>
        <label>Word Spacing:</label>
        <input type="text" name="Themes_word_spacing" value="<?php echo $model->word_spacing; ?>"> px<br><br>
        <label>Line Height:</label>
        <input type="text" name="Themes_line_height" value="<?php echo $model->line_height; ?>"> px<br><br>
        <label>Text Transform:</label>
        <select name="Themes_text_transform" class="custom-select">
            <option value="none">None</option>
            <option value="uppercase">Uppercase</option>
            <option value="lowercase">Lowercase</option>
            <option value="capitalize">Capitalize</option>
        </select><br><br>
        <label>Text Align:</label>
        <select name="Themes_text_align" class="custom-select">
            <option value="left">Left</option>
            <option value="center">Center</option>
            <option value="right">Right</option>
            <option value="justify">Justify</option>
        </select><br><br>
        <label>Text Shadow:</label>
        <input type="text" name="Themes_text_shadow" value="<?php echo $model->text_shadow; ?>"><br><br>
        <label>Text Indent:</label>
        <input type="text" name="Themes_text_indent" value="<?php echo $model->text_indent; ?>"> px<br><br>
        <label>Text Decoration:</label>
        <select name="Themes_text_decoration" class="custom-select">
            <option value="none">None</option>
            <option value="underline">Underline</option>
            <option value="overline">Overline</option>
            <option value="line-through">Line-Through</option>
        </select><br><br>
        <label>Text Overflow:</label>
        <select name="Themes_text_overflow" class="custom-select">
            <option value="visible">Visible</option>
            <option value="hidden">Hidden</option>
            <option value="scroll">Scroll</option>
            <option value="ellipsis">Ellipsis</option>
        </select><br><br>
        <label>White Space:</label>
        <select name="Themes_white_space" class="custom-select">
            <option value="normal">Normal</option>
            <option value="nowrap">No Wrap</option>
            <option value="pre">Pre</option>
            <option value="pre-line">Pre-Line</option>
            <option value="pre-wrap">Pre-Wrap</option>
        </select><br><br>
        <label>Text Orientation:</label>
        <select name="Themes_text_orientation" class="custom-select">
            <option value="horizontal">Horizontal</option>
            <option value="vertical">Vertical</option>
        </select><br><br>
<label>Text Wrap:</label>
<select name="Themes_text_wrap" class="custom-select">
    <option value="normal">Normal</option>
    <option value="nowrap">No Wrap</option>
    <option value="wrap">Wrap</option>
    <option value="wrap-reverse">Wrap Reverse</option>
</select><br><br>

        <input type="submit" value="Save">
    </form>
</div>
<div id="Border" class="tabcontent">

<!-- Implement the tab content for Text -->
<label><strong>Border:</strong></label><br><br>
    <form method="post">
<label>Border :</label>
<input type="text" name="Themes_border" value="<?php echo $model->border; ?>"> px<br><br>
<label>Border Style:</label>
<input type="text" name="Themes_border_width" value="<?php echo $model->border_width; ?>"> px<br><br>
<label>Border Radius:</label>
<input type="text" name="Themes_border_radius value="<?php echo $model->border_radius; ?>"> px<br><br>
<label>Border Style:</label>
<select name="Themes_border_style" class="custom-select">
    <option value="none">None</option>
    <option value="solid">Solid</option>
    <option value="dashed">Dashed</option>
    <option value="dotted">Dotted</option>
    <option value="double">Double</option>
    <option value="groove">Groove</option>
    <option value="ridge">Ridge</option>
    <option value="inset">Inset</option>
    <option value="outset">Outset</option>
</select><br><br>
     <input type="submit" value="Save">
    </form>
</div>
<div id="Outline" class="tabcontent">

<label><strong>Outline:</strong></label><br><br>
    <form method="post">

<select name="Themes_outline_style" class="custom-select">
    <option value="none">None</option>
    <option value="solid">Solid</option>
    <option value="dashed">Dashed</option>
    <option value="dotted">Dotted</option>
    <option value="double">Double</option>
    <option value="groove">Groove</option>
    <option value="ridge">Ridge</option>
    <option value="inset">Inset</option>
    <option value="outset">Outset</option>
</select><br><br>
<label>Outline Width:</label>
<input type="text" name="Themes_outline_width" value="<?php echo $model->outline_width; ?>"> px<br><br>
<label>Outline Color:</label>
<input type="text" name="Themes_outline_color" value="<?php echo $model->outline_color; ?>"><br><br>

     <input type="submit" value="Save">
    </form>
</div>
<div id="Grid" class="tabcontent">
    <h3>Grid</h3>
    <form method="post">
        <label><strong>Grid:</strong></label><br><br>
        <label>Grid Template Columns:</label>
        <input type="text" name="Themes_grid_template_columns" value="<?php echo $model->grid_template_columns; ?>"><br><br>
        <label>Grid Template Rows:</label>
        <input type="text" name="Themes_grid_template_rows" value="<?php echo $model->grid_template_rows; ?>"><br><br>
        <label>Grid Template Areas:</label>
        <input type="text" name="Themes_grid_template_areas" value="<?php echo $model->grid_template_areas; ?>"><br><br>
        <label>Grid Gap:</label>
        <input type="text" name="Themes_grid_gap" value="<?php echo $model->grid_gap; ?>"> px<br><br>
        <label>Justify Items:</label>
        <select name="Themes_justify_items" class="custom-select">
            <option value="start">Start</option>
            <option value="end">End</option>
            <option value="center">Center</option>
            <option value="stretch">Stretch</option>
        </select><br><br>
        <label>Align Items:</label>
        <select name="Themes_align_items" class="custom-select">
            <option value="start">Start</option>
            <option value="end">End</option>
            <option value="center">Center</option>
            <option value="stretch">Stretch</option>
        </select><br><br>
        <label>Grid Auto Columns:</label>
        <input type="text" name="Themes_grid_auto_columns" value="<?php echo $model->grid_auto_columns; ?>"><br><br>
        <label>Grid Auto Rows:</label>
        <input type="text" name="Themes_grid_auto_rows" value="<?php echo $model->grid_auto_rows; ?>"><br><br>
        <label>Grid Auto Flow:</label>
        <select name="Themes_grid_auto_flow" class="custom-select">
            <option value="row">Row</option>
            <option value="column">Column</option>
            <option value="dense">Dense</option>
            <option value="row dense">Row Dense</option>
            <option value="column dense">Column Dense</option>
        </select><br><br>
      <label>Grid Area:</label>
        <input type="text" name="Themes_grid_area" value="<?php echo $model->grid_area; ?>"><br><br>
        <label>Grid Template Areas:</label>
        <input type="text" name="Themes_grid_template_areas" value="<?php echo $model->grid_template_areas; ?>"><br><br>
        <label>Grid Template:</label>
        <input type="text" name="Themes_grid_template" value="<?php echo $model->grid_template; ?>"><br><br>
        <label>Grid Row Gap:</label>
        <input type="text" name="Themes_grid_row_gap" value="<?php echo $model->grid_row_gap; ?>"> px<br><br>
        <label>Grid Column Gap:</label>
        <input type="text" name="Themes_grid_column_gap" value="<?php echo $model->grid_column_gap; ?>"> px<br><br>
        <label>Grid Row End:</label>
        <input type="text" name="Themes_grid_row_end" value="<?php echo $model->grid_row_end; ?>"> px<br><br>
        <label>Grid Column End:</label>
        <input type="text" name="Themes_grid_column_end" value="<?php echo $model->grid_column_end; ?>"> px<br><br>
        <label>Grid Template Rows (Mobile):</label>
        <input type="text" name="Themes_grid_template_rows_mobile" value="<?php echo $model->grid_template_rows_mobile; ?>"><br><br>
        <label>Grid Template Columns (Mobile):</label>
        <input type="text" name="Themes_grid_template_columns_mobile" value="<?php echo $model->grid_template_columns_mobile; ?>"><br><br>
        <label>Grid Template Areas (Mobile):</label>
        <input type="text" name="Themes_grid_template_areas_mobile" value="<?php echo $model->grid_template_areas_mobile; ?>"><br><br>
        <label>Grid Template (Mobile):</label>
        <input type="text" name="Themes_grid_template_mobile" value="<?php echo $model->grid_template_mobile; ?>"><br><br>
        <label>Grid Row Gap (Mobile):</label>
        <input type="text" name="Themes_grid_row_gap_mobile" value="<?php echo $model->grid_row_gap_mobile; ?>"> px<br><br>
        <label>Grid Column Gap (Mobile):</label>
        <input type="text" name="Themes_grid_column_gap_mobile" value="<?php echo $model->grid_column_gap_mobile; ?>"> px<br><br>
        <label>Grid Gap (Mobile):</label>
        <input type="text" name="Themes_grid_gap_mobile" value="<?php echo $model->grid_gap_mobile; ?>"> px<br><br>
        <label>Grid Auto Rows (Mobile):</label>
        <input type="text" name="Themes_grid_auto_rows_mobile" value="<?php echo $model->grid_auto_rows_mobile; ?>"><br><br>
        <label>Grid Auto Columns (Mobile):</label>
        <input type="text" name="Themes_grid_auto_columns_mobile" value="<?php echo $model->grid_auto_columns_mobile; ?>"><br><br>
        <label>Grid Auto Flow (Mobile):</label>
        <select name="Themes_grid_auto_flow_mobile" class="custom-select">
            <option value="row">Row</option>
            <option value="column">Column</option>
            <option value="dense">Dense</option>
            <option value="row dense">Row Dense</option>
            <option value="column dense">Column Dense</option>
        </select><br><br>
        <label>Grid (Mobile):</label>
        <input type="text" name="Themes_grid_mobile" value="<?php echo $model->grid_mobile; ?>"><br><br>
        <label>Grid Row Start (Mobile):</label>
        <input type="text" name="Themes_grid_row_start_mobile" value="<?php echo $model->grid_row_start_mobile; ?>"> px<br><br>
        <label>Grid Column Start (Mobile):</label>
        <input type="text" name="Themes_grid_column_start_mobile" value="<?php echo $model->grid_column_start_mobile; ?>"> px<br><br>
    </form>
</div>

<div id="Link" class="tabcontent">
    <form method="post">
        <label><strong>Links:</strong></label><br><br>
        <label>Link Color:</label>
        <input type="text" name="Themes_link_color" value="<?php echo $model->link_color; ?>"><br><br>
        <label>Visited Link Color:</label>
        <input type="text" name="Themes_link_visited_color" value="<?php echo $model->link_visited_color; ?>"><br><br>
        <label>Hover Link Color:</label>
        <input type="text" name="Themes_link_hover_color" value="<?php echo $model->link_hover_color; ?>"><br><br>
        <!-- Add more link fields if needed -->
        <input type="submit" value="Save">
    </form>
</div>
<div id="Icon" class="tabcontent">
    <h3>Icon</h3>
    <form method="post">
        <div>
            <label><strong>Icon:</strong></label>
        </div>
        <div>
            <label>Icon Color:</label>
            <input type="text" name="Themes_icon_color" value="<?php echo $model->icon_color; ?>">
        </div>
        <div>
            <label>Icon Size:</label>
            <input type="text" name="Themes_icon_size" value="<?php echo $model->icon_size; ?>"> px
        </div>
        <div>
            <input type="submit" value="Save">
        </div>
    </form>
</div>

<div id="List" class="tabcontent">
    <form method="post">
        <div>
            <label><strong>List:</strong></label>
        </div>
        <div>
            <label>List Style:</label>
            <select name="Themes_list_style">
                <option value="none">None</option>
                <option value="default">Default</option>
                <option value="circle">Circle</option>
                <option value="square">Square</option>
                <option value="disc">Disc</option>
            </select>
        </div>
        <div>
            <label>List Style Type:</label>
            <select name="Themes_list_style_type">
                <option value="default">Default</option>
                <option value="decimal">Decimal</option>
                <option value="lower-alpha">Lower Alpha</option>
                <option value="upper-alpha">Upper Alpha</option>
                <option value="lower-roman">Lower Roman</option>
                <option value="upper-roman">Upper Roman</option>
            </select>
        </div>
        <div>
            <label>List Style Position:</label>
            <select name="Themes_list_style_position">
                <option value="default">Default</option>
                <option value="inside">Inside</option>
                <option value="outside">Outside</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Save">
        </div>
    </form>
</div>
<div id="Tab" class="tabcontent">
    <form method="post">
        <div>
            <label><strong>Tab:</strong></label>
        </div>
        <div>
            <label>Background Color:</label>
            <input type="text" name="Themes_tab_background_color" value="<?php echo $model->tab_background_color; ?>">
        </div>
        <div>
            <label>Border Color:</label>
            <input type="text" name="Themes_tab_border_color" value="<?php echo $model->tab_border_color; ?>">
        </div>
        <div>
            <label>Border Width:</label>
            <input type="text" name="Themes_tab_border_width" value="<?php echo $model->tab_border_width; ?>"> px
        </div>
        <div>
            <label>Padding:</label>
            <input type="text" name="Themes_tab_padding" value="<?php echo $model->tab_padding; ?>"> px
        </div>
        <div>
            <label>Margin:</label>
            <input type="text" name="Themes_tab_margin" value="<?php echo $model->tab_margin; ?>"> px
        </div>
        <div>
            <label>Font Color:</label>
            <input type="text" name="Themes_tab_font_color" value="<?php echo $model->tab_font_color; ?>">
        </div>
        <div>
            <label>Font Size:</label>
            <input type="text" name="Themes_tab_font_size" value="<?php echo $model->tab_font_size; ?>"> px
        </div>
        <div>
            <label>Font Weight:</label>
            <input type="text" name="Themes_tab_font_weight" value="<?php echo $model->tab_font_weight; ?>">
        </div>
        <div>
            <label>Text Transform:</label>
            <select name="Themes_tab_text_transform">
                <option value="none">None</option>
                <option value="uppercase">Uppercase</option>
                <option value="lowercase">Lowercase</option>
                <option value="capitalize">Capitalize</option>
            </select>
        </div>
        <div>
            <label>Text Decoration:</label>
            <select name="Themes_tab_text_decoration">
                <option value="none">None</option>
                <option value="underline">Underline</option>
                <option value="overline">Overline</option>
                <option value="line-through">Line-through</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Save">
        </div>
    </form>
</div>







<!-- Add JavaScript to handle tab switching -->
<script>
    function openTab(evt, tabName) {
        // Declare variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab and add an "active" class to the button that opened the tab
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>