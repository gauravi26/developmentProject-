<!DOCTYPE html>
<?php
// Check if $isUpdatePage is set and true, display "Custom Update Page Application" heading
if (isset($isUpdatePage) && $isUpdatePage) {
    echo "<h1>Custom Update Page Application</h1>";
} else {
    echo "<h1>Create Theme</h1>";
}
?>
<html>

    <head>
        
        <style>
    label {
    display: inline-block;
    width: 150px;
    margin-bottom: 10px;
}
input[type="text"] {
    width: 200px;
}
label strong {
    font-size: 20px;
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
    width: 80px;
}

input[type="text"],
input[type="password"],
input[type="email"],
input[type="text"],
input[type="color"],
textarea {
    height: 20px;
    font-size: 14px;
    width: 40px;
}

.tab {
    width: 11%;
    height: 100vh;
    float: left;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.tab button {
    width: 80%;
    text-align: left;
    height: 25px;
}

#themeform {
    width: 300px;
    float: left;
    max-height: 700px;
    overflow-y: auto;
    padding: 10px;
}

#themePreview {
    background-color: #ffffff;
    width: 500px;
    height: 700px;
    float: left;
    border: 1px solid #000;
    padding-left: 10px;
    padding-top: 10px;
}

#save {
    height: 30px;
    width: 50px;
}

.span-19 {
    width: 970px;
}

.label-bold {
    font-size: 20px;
}

#theme_name {
    width: 120px;
}

label {
    display: block;
    margin-top: 10px;
}

input {
    width: 100%;
    padding: 5px;
    margin-top: 5px;
}

.nested-tab {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}

.nested-tab .nested-tablinks {
    background-color: #f1f1f1;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin: 5px;
    padding: 10px 15px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.nested-tab .nested-tablinks:hover {
    background-color: #ccc;
}

.nested-tabcontent {
    display: none;
    padding: 20px;
}


</style>
    </head>
    <body>
<div class="tab">
    <button class="tablinks" onclick="openCss(event, 'BoxModel')">Box </button>
    <button class="tablinks" onclick="openCss(event, 'Text')">Text</button>
    <button class="tablinks" onclick="openCss(event, 'Background')">Background</button>
    <button class="tablinks" onclick="openCss(event, 'Border')">Border</button>
    <button class="tablinks" onclick="openCss(event, 'Transition')">Transition</button>
    <button class="tablinks" onclick="openCss(event, 'Outline')">Outline</button>
    <button class="tablinks" onclick="openCss(event, 'Link')">Link</button>
   
     <button class="tablinks" onclick="openCss(event, 'List')">List</button>
   



</div>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">




<form id="themeform" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->createUrl('/themes/cssinput'); ?>">
    <!-- Box Model -->     <div class="scroll-container">


        <div id = "BoxModel" class="tabcontent"><br>
            <label><strong>Box Model:</strong></label>
            <label class="label-bold"> Theme Name :</label>
            <input type="text" name="theme_name" id="theme_name" value="<?php echo CHtml::encode($theme->theme_name); ?>"required><br>
            <label>Height:</label>
            <input type="text" name="height" value="<?php echo CHtml::encode($theme->height); ?>"> px<br> 
            <label>Width:</label>
            <input type="text" name="width" value="<?php echo CHtml::encode($theme->width); ?>"> px<br> 
            <label>Margin:</label>
            <input type="text" id="marginInput" name="margin" value="<?php echo CHtml::encode($theme->margin); ?>"> px

            <label>Padding:</label>
            <input type="text" id="paddingInput" name="padding" value="<?php echo CHtml::encode($theme->padding); ?>"> px

            <label>Slider:</label>
            <input type="range" id="slider" min="0" max="100" step="1" oninput="updateInputValues()" >

            <label>Display Property</label>
            <select name="display_property" class="custom-select" value="<?php echo CHtml::encode($theme->display); ?>">
                <option selected disabled>Select</option>
                <option value="block">Block</option>
                <option value="inline">Inline</option>
                <option value="inline-block">Inline Block</option>
                <option value="flex">Flex</option>
                <option value="grid">Grid</option>
                <option value="inline-flex">Inline Flex</option>
                <option value="table">Table</option>
                <option value="table-cell">Table Cell</option>
                <option value="none">None</option>
            </select><br>

            <label>Clear:</label>
            <input type="text" name="clear" value="<?php echo CHtml::encode($theme->clear); ?>" ><br> 

            <label>Position Property</label>
            <select name="position" class="custom-select" value="<?php echo CHtml::encode($theme->position); ?>">
                <option selected disabled>Select</option>
                <option value="static">Static</option>
                <option value="relative">Relative</option>
                <option value="absolute">Absolute</option>
                <option value="fixed">Fixed</option>
                <option value="sticky">Sticky</option>
            </select><br>


            <label>Box Sizing:</label>
            <select name="box_sizing" class="custom-select" value="<?php echo CHtml::encode($theme->box_sizing); ?>">
                <option selected disabled>Select</option>
                <option value="content-box">Content Box</option>
                <option value="border-box">Border Box</option>
            </select><br>
        </div>


        <!-- Text -->
        <?php
        $this->beginWidget('CActiveForm', array(
            'id' => 'textForm',
            'enableAjaxValidation' => false,
                // other form options
        ));
        ?>
        <div id="Text" class="tabcontent"><br>
            <label><strong>Text:</strong></label>
            <div class="nested-tab">
                <div class="nested-tablinks" onclick="openTextTypeTab(event, 'h1')">h1</div>
                <div class="nested-tablinks" onclick="openTextTypeTab(event, 'h2')">h2</div>
                <div class="nested-tablinks" onclick="openTextTypeTab(event, 'h3')">h3</div>
                <div class="nested-tablinks" onclick="openTextTypeTab(event, 'body')">body</div>
                <div class="nested-tablinks" onclick="openTextTypeTab(event, 'p')">p</div>
                <div class="nested-tablinks" onclick="openTextTypeTab(event, 'span')">span</div>
            </div>

            <!-- Nested Tabs for each text type -->
            <div id="h1" class="nested-tabcontent">
                <label>Text Color :</label>
                <button class="color-btn">Change Color</button>

                <label>Font Size :</label>
                <input type="text" id="h1_font_size" name="h1_font_size" data-text-type="h1" > px<br> 
                <input type="range" id="fontSizeSlider" >


                <label for="h1_font_family">Font Family:</label>
                <select name="h1_font_family" id="h1_font_family" data-text-type="h1">
                    <option value=" ">Select</option>
                    <option value="Arial, Helvetica, sans-serif" placeholder="Select"></option>
                    <option value="Arial, Helvetica, sans-serif">Arial, Helvetica, sans-serif</option>
                    <option value="Times New Roman, Times, serif">Times New Roman, Times, serif</option>
                    <option value="Courier New, Courier, monospace">Courier New, Courier, monospace</option>
                    <option value="Georgia, serif">Georgia, serif</option>
                    <option value="Verdana, Geneva, sans-serif">Verdana, Geneva, sans-serif</option>
                </select>
                <br>


                <label>Text Align:</label>
                <select name="h1_text_align" class="custom-select" data-text-type="h1">
                    <option value="">Select</option>
                    <option value="left">Left</option>
                    <option value="center">Center</option>
                    <option value="right">Right</option>
                    <option value="justify">Justify</option>
                </select><br>


                </select><br>

                <label>Text Decoration:</label>
                <select name="h1_text_decoration" class="custom-select" data-text-type="h1">
                    <option value="">Select</option>
                    <option value="none">None</option>
                    <option value="underline">Underline</option>
                    <option value="overline">Overline</option>
                    <option value="line-through">Line Through</option>
                </select><br></p>
                <input type="hidden" name="current_text_type" value="h1">

            </div>

            <div id="h2" class="nested-tabcontent">
                <p><label>Text Color:</label>
<!--                    <input type="color" id="h2_color"  name="h2_color" data-text-type="h2"><br>-->
                    <button class="color-btn">Change Color</button>

                    <label>Font Size :</label>
                    <input type="text" id="h2_font_size" name="h2_font_size" data-text-type="h2"> px<br> 
                    <input type="range" id="fontSizeSlider" >

<!--                <input type="number" id="fontSizeInput" name="font_size" min="1" max="100" value="16">px<br>
               <input type="range" id="fontSizeSlider" min="10" max="100" value="12">-->
                    <label for="h2_font_family">Font Family:</label>
                    <select name="h2_font_family" id="h2_font_family" data-text-type="h2">
                        <option value=" ">Select</option>
                        <option value="Arial, Helvetica, sans-serif">Arial, Helvetica, sans-serif</option>
                        <option value="Times New Roman, Times, serif">Times New Roman, Times, serif</option>
                        <option value="Courier New, Courier, monospace">Courier New, Courier, monospace</option>
                        <option value="Georgia, serif">Georgia, serif</option>
                        <option value="Verdana, Geneva, sans-serif">Verdana, Geneva, sans-serif</option>
                    </select>
                    <br>


                    <label>Text Align:</label>
                    <select name="h2_text_align" class="custom-select" data-text-type="h2">
                        <option value="">Select</option>
                        <option value="left">Left</option>
                        <option value="center">Center</option>
                        <option value="right">Right</option>
                        <option value="justify">Justify</option>
                    </select><br>


                    <label>Text Decoration:</label>
                    <select name="h2_text_decoration" class="custom-select" data-text-type="h2">
                        <option value="">Select</option>
                        <option value="none">None</option>
                        <option value="underline">Underline</option>
                        <option value="overline">Overline</option>
                        <option value="line-through">Line Through</option>
                    </select><br></p>

            </div>

            <div id="h3" class="nested-tabcontent">
                <label>Text Color :</label>

                    <button class="color-btn">Change Color</button>
                    <label>Font Size :</label>
                    <input type="text" id="h3_font_size" name="h3_font_size" data-text-type="h3"> px<br> 
    <!--               <input type="range" id="fontSizeSlider" >-->

<!--                <input type="number" id="fontSizeInput" name="font_size" min="1" max="100" value="16">px<br>
               <input type="range" id="fontSizeSlider" min="10" max="100" value="12">-->
                    <label for="h3_font_family">Font Family:</label>
                    <select name="h3_font_family" id="h3_font_family" data-text-type="h3">
                        <option value=" ">Select</option>
                        <option value="Arial, Helvetica, sans-serif">Arial, Helvetica, sans-serif</option>
                        <option value="Times New Roman, Times, serif">Times New Roman, Times, serif</option>
                        <option value="Courier New, Courier, monospace">Courier New, Courier, monospace</option>
                        <option value="Georgia, serif">Georgia, serif</option>
                        <option value="Verdana, Geneva, sans-serif">Verdana, Geneva, sans-serif</option>
                    </select>
                    <br>


                    <label>Text Align:</label>
                    <select name="h3_text_align" class="h3_custom-select" data-text-type="h3">
                        <option value="">Select</option>
                        <option value="left">Left</option>
                        <option value="center">Center</option>
                        <option value="right">Right</option>
                        <option value="justify">Justify</option>
                    </select><br>

                    </select><br>

                    <label>Text Decoration:</label>
                    <select name="h3_text_decoration" class="custom-select" data-text-type="h3">
                        <option value="">Select</option>
                        <option value="none">None</option>
                        <option value="underline">Underline</option>
                        <option value="overline">Overline</option>
                        <option value="line-through">Line Through</option>
                    </select><br></p>
            </div><p>

            <div id="body" class="nested-tabcontent">
                <label>Text Color :</label>

                    <button class="color-btn">Change Color</button>
                    <label>Font Size :</label>
                    <input type="text" id="body_font_size" name="body_font_size" data-text-type="body"> px<br> 
                    <input type="range" id="fontSizeSlider" >

<!--                <input type="number" id="fontSizeInput" name="font_size" min="1" max="100" value="16">px<br>
               <input type="range" id="fontSizeSlider" min="10" max="100" value="12">-->
                    <label for="body_font_family">Font Family:</label>
                    <select name="body_font_family" id="body_font_family" data-text-type="body">
                        <option value=" ">Select</option>
                        <option value="Arial, Helvetica, sans-serif">Arial, Helvetica, sans-serif</option>
                        <option value="Times New Roman, Times, serif">Times New Roman, Times, serif</option>
                        <option value="Courier New, Courier, monospace">Courier New, Courier, monospace</option>
                        <option value="Georgia, serif">Georgia, serif</option>
                        <option value="Verdana, Geneva, sans-serif">Verdana, Geneva, sans-serif</option>
                    </select>
                    <br>


                    <label>Text Align:</label>
                    <select name="body_text_align" class="custom-select" data-text-type="body">
                        <option value="">Select</option>
                        <option value="left">Left</option>
                        <option value="center">Center</option>
                        <option value="right">Right</option>
                        <option value="justify">Justify</option>
                    </select><br>


                    <label>Text Decoration:</label>
                    <select name="body_text_decoration" class="custom-select" data-text-type="body">
                        <option value="">Select</option>
                        <option value="none">None</option>
                        <option value="underline">Underline</option>
                        <option value="overline">Overline</option>
                        <option value="line-through">Line Through</option>
                    </select><br></p>
            </div><p>

            <div id="p" class="nested-tabcontent">
        <!--        <p><input type="pcolor" name="pcolor"><br>-->
                <label>Text Color :</label>

                    <button class="color-btn">Change Color</button>

                    <label>Font Size :</label>
                    <input type="text" id="p_font_size" name="p_font_size" data-text-type="p"> px<br> 
                    <input type="range" id="fontSizeSlider" >

<!--                <input type="number" id="fontSizeInput" name="font_size" min="1" max="100" value="16">px<br>
               <input type="range" id="fontSizeSlider" min="10" max="100" value="12">-->
                    <label for="p_font_family">Font Family:</label>
                    <select name="p_font_family" id="p_font_family" data-text-type="p">
                        <option value=" ">Select</option>
                        <option value="Arial, Helvetica, sans-serif">Arial, Helvetica, sans-serif</option>
                        <option value="Times New Roman, Times, serif">Times New Roman, Times, serif</option>
                        <option value="Courier New, Courier, monospace">Courier New, Courier, monospace</option>
                        <option value="Georgia, serif">Georgia, serif</option>
                        <option value="Verdana, Geneva, sans-serif">Verdana, Geneva, sans-serif</option>
                    </select>
                    <br>


                    <label>Text Align:</label>
                    <select name="p_text_align" class="custom-select" data-text-type="p">
                        <option value="">Select</option>
                        <option value="left">Left</option>
                        <option value="center">Center</option>
                        <option value="right">Right</option>
                        <option value="justify">Justify</option>
                    </select><br>
                    <!--        <label>Text Shadow:</label>
                      <select name="p_text_shadow_select" class="custom-select" data-text-type="p">
                        <option value="">Select</option>
                        <option value=" black">Shadow 1</option>
                        <option value="gray">Shadow 2</option>
                        <option value=" darkgray">Shadow 3</option>
                       <option value=" blue">Shadow 4</option>
                    <option value=" red">Shadow 5</option>
                    <option value=" green">Shadow 6</option>-->

                    </select><br>

                    <label>Text Decoration:</label>
                    <select name="p_text_decoration" class="custom-select" data-text-type="p">
                        <option value="">Select</option>
                        <option value="none">None</option>
                        <option value="underline">Underline</option>
                        <option value="overline">Overline</option>
                        <option value="line-through">Line Through</option>
                    </select><br></p>
            </div><p>

        </div>
        <?php $this->endWidget(); ?>


        <div id ="Background" class="tabcontent"><br>

            <label><strong>Background :</strong></label>                       
            <label>Background Color:</label>
            <input type="color" name="background_color" value="<?php echo empty($theme->background_color) ? '#FFFFFF' : CHtml::encode($theme->background_color); ?>"><br>
            <label for="background_image">Background Image:</label>
            <input type="file" name="file" id="background_image"><br/>
            Enter image name:<input type="text" name="filename"><br/>

            <!-- Additional text box with the same ID as the file input -->
            <select name="background_image_dropdown" id="background_image_dropdown">
                <?php
                $imageFolderPath = 'images/';
                $savedImages = scandir($imageFolderPath);
                $savedImages = array_diff($savedImages, array('.', '..'));

                foreach ($savedImages as $savedImage) {
                    $imageName = htmlspecialchars(urldecode($savedImage));
                    echo "<option value=\"$imageName\">$imageName</option>";
                }
                ?>
            </select><br/>
            <label>Repeat:</label>

            <select name="background_repeat" class="custom-select" id="background_repeat" value="<?php echo CHtml::encode($theme->background_repeat); ?>">>
                <option selected >Select</option>
                <option value="repeat">Repeat</option>
                <option value="repeat-x">Repeat Horizontally</option>
                <option value="repeat-y">Repeat Vertically</option>
                <option value="no-repeat">No Repeat</option>
            </select><br>
            <label>Position:</label>
            <select name="background_position" id="background_position" value="<?php echo CHtml::encode($theme->background_position); ?>">
                <option value="center center">Center</option>
                <option value="left top">Left Top</option>
                <option value="right top">Right Top</option>
                <option value="left center">Left Center</option>
                <option value="right center">Right Center</option>
                <option value="left bottom">Left Bottom</option>
                <option value="right bottom">Right Bottom</option>
            </select><br>



        </div>
        <div id ="Border" class="tabcontent"><br>
            <label>Border-Style:</label><br>
            <?php
            $borderStyles = ['hidden', 'dotted', 'dashed', 'solid', 'double', 'groove', 'ridge'];

            echo CHtml::dropDownList(
                    'border_style',
                    $theme->border_style,
                    array_combine($borderStyles, $borderStyles),
                    array('class' => 'custom-select', 'prompt' => 'Select')
            );
            ?>
            <br>


            </select>
            <br>
            <label>Border Width:</label><br>
            <input type="text" name="border_width" value="<?php echo CHtml::encode($theme->border_width); ?>"> px<br>
            <label>Border Radius:</label><br>
            <input type="text" name="border_radius" value="<?php echo CHtml::encode($theme->border_radius); ?>"> px<br>
            <label>Border color:</label><br>
            <input type="color" name="border_color"value="<?php echo CHtml::encode($theme->border_color); ?>"> px<br>

        </div><br>

        <div id="Transition" class="tabcontent">
            <label>Opacity:</label>
            <input type="text" name="opacity"  ><br>

            <label>Transition Property:</label>
            <select name="transition_property">
                <option value="all"> </option>
                <option value="all">All</option>
                <option value="color">Color</option>
                <option value="background-color">Background Color</option>
                <option value="opacity">Opacity</option>
                <option value="transform">Transform</option>
                Add more options as needed 
            </select><br>

            <label>Box Shadow:</label>
            <select name="box_shadow">
                <option value="none">None</option>
                <option value="2px 2px 4px rgba(0, 0, 0, 0.2)">Subtle Shadow</option>
                <option value="0px 4px 6px rgba(0, 0, 0, 0.1), 0px 2px 4px rgba(0, 0, 0, 0.1)">Stacked Shadows</option>
                <option value="0px 10px 20px rgba(0, 0, 0, 0.2)">Soft Shadow</option>
                <option value="0px 0px 10px rgba(0, 0, 0, 0.3), 0px 0px 30px rgba(0, 0, 0, 0.2)">Floating Shadow</option>
                <option value="inset 0px 0px 10px rgba(0, 0, 0, 0.3)">Inset Shadow</option>
            </select><br>
            <label for="transition_duration">Transition Duration (s):</label>
            <input type="text" name="transition_duration" id="transition_duration"> sec<br>

            <label for="transition_timing_function">Timing Function:</label>
            <select name="transition_timing_function" id="transition_timing_function">
                <option value="ease">Ease</option>
                <option value="linear">Linear</option>
                <option value="ease-in">Ease In</option>
                <option value="ease-out">Ease Out</option>
                <option value="ease-in-out">Ease In-Out</option>
                <!-- Add more options as needed -->
            </select><br>

        </div>

        <div id ="Outline" class="tabcontent"><br>

            <label><strong>Outline:</strong></label>
            <label>Outline Style:</label>
            <select name="outline_style" class="custom-select">
                <option value="none">None</option>
                <option value="solid">Solid</option>
                <option value="dotted">Dotted</option>
                <option value="dashed">Dashed</option>
                <option value="double">Double</option>
                <option value="groove">Groove</option>
                <option value="ridge">Ridge</option>
                <option value="inset">Inset</option>
                <option value="outset">Outset</option>
            </select><br>
            <label>Outline Width:</label>
            <input type="text" name="outline_width"> px<br>
            <label>Outline Color:</label>
            <input type="color" name="outline_color"><br>         
        </div>
        <div id ="Link" class="tabcontent"><br>

            <label><strong>Link:</strong></label>
            <label>Link Color:</label>
            <input type="color" name="link_color"><br>
            <!--            <label>Visited Link Color:</label>
                        <input type="color" name="visited"><br>
                        <label>Hover Link Color:</label>
                        <input type="color" name="hover"><br>-->
        </div><br>
        <div id ="Icon" class="tabcontent"><br>      
            <label><strong>Icon:</strong></label>
            <label for="icon">icon</label>
            <input type="file" name="iconfile" id="icon"><br/>
            Enter icon name:<input type="text" name="iconfilename"><br/>

            <!-- Additional text box with the same ID as the file input -->
            <select name="icon_dropdown" id="icon_dropdown">
                <?php
                $iconFolderPath = 'icon/';
                $savedIcons = scandir($iconFolderPath);
                $savedIcons = array_diff($savedIcons, array('.', '..'));

                foreach ($savedIcons as $savedIcon) {
                    $iconName = htmlspecialchars(urldecode($savedIcon));
                    echo "<option value=\"$iconName\">$iconName</option>";
                }
                ?>
            </select><br/>
            <label>Icon Size:</label>
            <input type="text" name="icon_size"> px<br>

        </div><br>
        <div id="Grid" class="tabcontent">
            <label><strong>Grid:</strong></label><br>
            <label>Grid Template Columns:</label>
            <input type="text" name="grid_template_columns" pattern="\d*" title="Please enter a text"><br>
            <label>Grid Template Rows:</label>
            <input type="text" name="grid_template_rows" pattern="\d*" title="Please enter a text"><br>
            <label>Grid Template Areas:</label>
            <input type="text" name="grid_template_areas"><br>
            <label>Grid Gap:</label>
            <input type="text" name="grid_gap"> px<br>
            <label>Justify Items:</label>
            <select name="justify_items" class="custom-select">
                <option value="start">Start</option>
                <option value="end">End</option>
                <option value="center">Center</option>
                <option value="stretch">Stretch</option>
                <option value="space-around">Space Around</option>
                <option value="space-between">Space Between</option>
                <option value="space-evenly">Space Evenly</option>
            </select><br>
            <label>Align Items:</label>
            <select name="align_items" class="custom-select">
                <option value="start">Start</option>
                <option value="end">End</option>
                <option value="center">Center</option>
                <option value="stretch">Stretch</option>
                <option value="baseline">Baseline</option>
            </select><br>
            <label>Grid Auto Columns:</label>
            <input type="text" name="grid_auto_columns" pattern="\d*" title="Please enter a text"><br>
            <label>Grid Auto Rows:</label>
            <input type="text" name="grid_auto_rows" pattern="\d*" title="Please enter a text"><br>
            <label>Grid Auto Flow:</label>
            <select name="grid_auto_flow" class="custom-select">
                <option value="row">Row</option>
                <option value="column">Column</option>
                <option value="dense">Dense</option>
            </select><br>
            <label>Grid Column:</label>
            <input type="text" name="grid_column_start"><br>
            <label>Grid Row:</label>
            <input type="text" name="grid_column_start"><br>
            <label>Grid Area:</label>
            <input type="text" name="grid_area"><br>

            <!-- Grid properties -->
            <label for="grid_template_areas">Grid Template Areas:</label>
            <input type="text" name="grid_template_areas" id="grid_template_areas"><br>

            <label for="grid_template">Grid Template:</label>
            <input type="text" name="grid_template" id="grid_template"><br>

            <label for="grid_row_gap">Grid Row Gap:</label>
            <input type="text" name="grid_row_gap" id="grid_row_gap"> px<br>

            <label for="grid_column_gap">Grid Column Gap:</label>
            <input type="text" name="grid_column_gap" id="grid_column_gap"> px<br>

            <label for="grid_row_end">Grid Row End:</label>
            <input type="text" name="grid_row_end" id="grid_row_end"> px<br>

            <label for="grid_column_end">Grid Column End:</label>
            <input type="text" name="grid_column_end" id="grid_column_end"> px<br>

            <label for="grid_template_rows_mobile">Grid Template Rows (Mobile):</label>
            <input type="text" name="grid_template_rows_mobile" id="grid_template_rows_mobile"><br>

            <label for="grid_template_columns_mobile">Grid Template Columns (Mobile):</label>
            <input type="text" name="grid_template_columns_mobile" id="grid_template_columns_mobile"><br>

            <label for="grid_template_areas_mobile">Grid Template Areas (Mobile):</label>
            <input type="text" name="grid_template_areas_mobile" id="grid_template_areas_mobile"><br>

            <label for="grid_template_mobile">Grid Template (Mobile):</label>
            <input type="text" name="grid_template_mobile" id="grid_template_mobile"><br>

            <label for="grid_row_gap_mobile">Grid Row Gap (Mobile):</label>
            <input type="text" name="grid_row_gap_mobile" id="grid_row_gap_mobile"> px<br>

            <label for="grid_column_gap_mobile">Grid Column Gap (Mobile):</label>
            <input type="text" name="grid_column_gap_mobile" id="grid_column_gap_mobile"> px<br>

            <label for="grid_gap_mobile">Grid Gap (Mobile):</label>
            <input type="text" name="grid_gap_mobile" id="grid_gap_mobile"> px<br>

            <label for="grid_auto_rows_mobile">Grid Auto Rows (Mobile):</label>
            <input type="text" name="grid_auto_rows_mobile" id="grid_auto_rows_mobile"><br>

            <label for="grid_auto_columns_mobile">Grid Auto Columns (Mobile):</label>
            <input type="text" name="grid_auto_columns_mobile" id="grid_auto_columns_mobile"><br>

            <label for="grid_auto_flow_mobile">Grid Auto Flow (Mobile):</label>
            <input type="text" name="grid_auto_flow_mobile" id="grid_auto_flow_mobile"><br>

            <label for="grid_mobile">Grid (Mobile):</label>
            <input type="text" name="grid_mobile" id="grid_mobile"><br>

            <label for="grid_row_start_mobile">Grid Row Start (Mobile):</label>
            <input type="text" name="grid_row_start_mobile" id="grid_row_start_mobile"> px<br>


            <label for="grid_row_start_mobile">Grid Column Start (Mobile):</label>
            <input type="text" name="grid_column_start_mobile" id="grid_column_start_mobile"> px<br>

        </div><br>  
        <div id="List" class="tabcontent">

            <label><strong>List:</strong></label><br>


            <label for="list_style_type">List Style Type:</label>
            <select id="list_style_type" name="list_style_type">
                <option value="">Default</option>
                <option value="circle">Circle</option>
                <option value="square">Square</option>
                <option value="decimal">Decimal</option>
                <!-- Add more options as needed -->
            </select>

            <label for="list_style_position">List Style Position:</label>
            <select id="list_style_position" name="list_style_position">
                <option value="">Default</option>
                <option value="inside">Inside</option>
                <option value="outside">Outside</option>
            </select>
            <br>

        </div>
        <br>
        <div class="tab">
            <div class="tab-content">
                <div id="List" class="tabcontent">
                    <label><strong>List:</strong></label><br>
                    <label for="listStyle">List Style:</label>
                    <select id="listStyle" name="list_style">
                        <option value="">None</option>
                        <option value="disc">Disc</option>
                        <option value="circle">Circle</option>
                        <option value="square">Square</option>
                        <option value="decimal">Decimal</option>
                        <!-- Add more options as needed -->
                    </select><br>
                    <label for="listStyleType">List Style Type:</label>
                    <select id="listStyleType" name="list_style_type">
                        <option value="">Default</option>
                        <option value="circle">Circle</option>
                        <option value="square">Square</option>
                        <option value="decimal">Decimal</option>
                        <!-- Add more options as needed -->
                    </select><br>
                    <label for="listStylePosition">List Style Position:</label>
                    <select id="listStylePosition" name="list_style_position">
                        <option value="">Default</option>
                        <option value="inside">Inside</option>
                        <option value="outside">Outside</option>
                    </select><br>
                </div>
            </div>
        </div>
        <div class="tab">
            <div class="tab-content">
                <div id="Tab" class="tabcontent" >
                    <label><strong>Tab:</strong></label><br>
                    <label>Background Color:</label>
                    <input type="color" id="tab_background_color" name="tab_background_color"><br>
                    <label>Border Color:</label>
                    <input type="color" id="tab_border_color" name="tab_border_color"><br>
                    <label>Border Width:</label>
                    <input type="text" id="tab_border_width" name="tab_border_width"> px<br>
                    <label>Padding:</label>
                    <input type="text" id="tab_padding" name="tab_padding"> px<br>
                    <label>Margin:</label>
                    <input type="text" id="tab_margin" name="tab_margin"> px<br>
                    <label>Font Color:</label>
                    <input type="color" id="tab_font_color" name="tab_font_color"><br>
                    <label>Font Size:</label>
                    <input type="text" id="tab_font_size" name="tab_font_size"> px<br>
                    <label>Font Weight:</label>
                    <input type="text" id="tab_font_weight" name="tab_font_weight"><br>
                    <label>Text Transform:</label>
                    <select id="tab_text_transform" name="tab_text_transform">
                        <option value="none">None</option>
                        <option value="uppercase">Uppercase</option>
                        <option value="lowercase">Lowercase</option>
                        <option value="capitalize">Capitalize</option>
                    </select><br>
                    <label>Text Decoration:</label>
                    <select id="tab_text_decoration" name="tab_text_decoration">
                        <option value="none">None</option>
                        <option value="underline">Underline</option>
                        <option value="overline">Overline</option>
                        <option value="line-through">Line-through</option>
                        <option value="underline overline">Underline Overline</option>
                    </select><br>


                </div>
            </div>
            <button  id ="save" type="submit" name="save_theme">Save </button><br>                       
        </div>


    </div>
    <br>        
    <script>
        function openCss(event, tabName) {
            // Hide all tabcontent elements
            var tabcontent = document.getElementsByClassName("tabcontent");
            for (var i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Remove 'active' class from all tablinks
            var tablinks = document.getElementsByClassName("tablinks");
            for (var i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the selected tab content and add 'active' class to the clicked tablink
            document.getElementById(tabName).style.display = "block";
            event.currentTarget.className += " active";
        }

        // Set "Box Model" tab as active by default on page load
        document.addEventListener("DOMContentLoaded", function () {
            var defaultTabButton = document.querySelector(".tablinks");
            defaultTabButton.click();
        });
    </script>
</form>

<div id="themePreviewContainer">


    <?php
    include 'themePreview.php'; // or require 'themePreview.php';
    ?>
</body>
    <script src="http://localhost/testproject/AjaxFiles/preview.js"></script>

    <script>
            document.addEventListener("DOMContentLoaded", function () {
                var colorButtons = document.querySelectorAll('.color-btn');

                colorButtons.forEach(function (button) {
                    button.addEventListener('click', function () {
                        event.preventDefault();
                        var parentDiv = this.parentNode;
                        var divId = parentDiv.getAttribute('id');

                        // Check if color input already exists
                        var colorInput = parentDiv.querySelector('.color-input');
                        if (!colorInput) {
                            // Create color input
                            colorInput = document.createElement('input');
                            colorInput.setAttribute('type', 'color');
                            colorInput.setAttribute('class', 'color-input');
                            colorInput.setAttribute('style', 'display: block;');
                            colorInput.setAttribute('name', divId + '_color'); // Set name attribute based on div ID
                            colorInput.setAttribute('id', divId + '_color'); // Set ID attribute based on div ID
                            parentDiv.appendChild(colorInput);
                        } else {
                            // Toggle visibility if color input already exists
                            if (colorInput.style.display === 'none') {
                                colorInput.style.display = 'block';
                            } else {
                                colorInput.style.display = 'none';
                            }
                        }
                    });
                });
            });
    </script>




    <!-- Add more color inputs here if needed -->


    <script> // Function to fetch font families from Google Fonts API
        function fetchGoogleFonts() {
            const apiUrl = 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyBn3fDI2UsZN37uP_sm95misjs33zXi6yY';

            fetch(apiUrl)
                    .then(response => {
                        if (!response.ok) {
                            console.error('Network response was not ok');
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Populate font family options for h1
                        const h1FontSelect = document.getElementById('h1_font_family');
                        data.items.forEach(font => {
                            const option = document.createElement('option');
                            option.value = font.family;
                            option.textContent = font.family;
                            h1FontSelect.appendChild(option);
                        });

                        // Populate font family options for h2
                        const h2FontSelect = document.getElementById('h2_font_family');
                        data.items.forEach(font => {
                            const option = document.createElement('option');
                            option.value = font.family;
                            option.textContent = font.family;
                            h2FontSelect.appendChild(option);
                        });

                        // Repeat the above steps to populate font family options for body and p

                        console.log('Fonts loaded successfully:', data.items.length, 'fonts');
                    })
                    .catch(error => {
                        console.error('Error fetching Google Fonts:', error);
                    });
        }

// Call the fetchGoogleFonts function to load fonts on page load
        fetchGoogleFonts();


    </script>

    <script>

// Function to open a specific tab and handle property values
        function openTextTypeTab(evt, textType) {
            var i, nestedTabContent, nestedTabLinks;
            nestedTabContent = document.getElementsByClassName('nested-tabcontent');
            for (i = 0; i < nestedTabContent.length; i++) {
                nestedTabContent[i].style.display = 'none';
            }
            nestedTabLinks = document.getElementsByClassName('nested-tablinks');
            for (i = 0; i < nestedTabLinks.length; i++) {
                nestedTabLinks[i].style.backgroundColor = '#f1f1f1';
            }
            document.getElementById(textType).style.display = 'block';
            evt.currentTarget.style.backgroundColor = '#ccc';


        }


    </script>
    
    </html>
