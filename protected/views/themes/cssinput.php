<?php
// Check if $isUpdatePage is set and true, display "Custom Update Page Application" heading
if (isset($isUpdatePage) && $isUpdatePage) {
    echo "<h1>Custom Update Page Application</h1>";
} else {
    echo "<h1>Create Theme</h1>";
}?>

    <style>
        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 20px;
        }
       
        label strong {
          font-size: 20px; /* or any other value you prefer */
}    



/*.tab button {
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 10px 12px;
  transition: 0.3s;
  font-size: 14px;
}*/

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
/*    transition-timing-function: ease-in-out; 
    transition-duration: 0.3s; */
    
}

.custom-select {
  width: 120px;
  height: 30px;
  font-size: 14px;
}

button,
input[type="button"],
/*input[type="submit"],*/
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
/*#themePreview {
            background-color: #ffffff;  Default background color 
            width: 40%;
            height: 85vh;
            float: right;
        }
        
        #themeform{
            
            width: 60%;
            float: left;
        }*/


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
    max-height: 700px; /* Set the maximum height for the theme form */
  overflow-y: auto; /* Add a vertical scrollbar when content exceeds the height */
  padding: 10px;


  }
  #themeform{
/*       transition: all 1s ease-out;*/
  }

  #themePreview {
    background-color: #ffffff;
    /* Default background color */
    width: 500px;
    height: 700px;
    float: left;
    border: 1px solid #000;
  
  padding-left: 10px;
  padding-top: 10px;
/*   transition: all 3s ease;*/
/*   transition: all 2s ease-out;*/

  
  }
  #save{
      
      height: 30px;
      width: 50px;
  }
  
  .span-19{
      width: 970px;
  }
/*   .container{
      width: 1500px;
  }*/

.label-bold{
    
    font-size :20px;
  
}
#theme_name
{
    width:120px
}
 

        /* Style the form fields */
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
<!--<div id="transitionPreviewBox" class="live-preview-box"  >
    <input type="type" name="name">
    <p>This is transition</p>-->

</div>
<style>
    #transitionPreviewBox {
        font-size: 20px;
        width: 70px;
        height: 70px;
        background-color: lightblue;
        margin-top: 10px;
/*        transition: 1s ease; */
    }

    #transitionPreviewBox:hover {
        width: 300px;
    }
/*     #themePreview:hover {
        width: 300px;
    }*/
/*     #formPreview:hover {
        width: 300px;
    }
    */
    
    .reverse-arrows {
  -webkit-appearance: textfield;
}

.reverse-arrows::-webkit-inner-spin-button {
  -webkit-transform: scaleY(-1);
}

    
</style>
<div class="tab">
  <button class="tablinks" onclick="openCss(event, 'BoxModel')">Box </button>
  <button class="tablinks" onclick="openCss(event, 'Text')">Text</button>
  <button class="tablinks" onclick="openCss(event, 'Background')">Background</button>
  <button class="tablinks" onclick="openCss(event, 'Border')">Border</button>
  <button class="tablinks" onclick="openCss(event, 'Transition')">Transition</button>
  <button class="tablinks" onclick="openCss(event, 'Outline')">Outline</button>
  <button class="tablinks" onclick="openCss(event, 'Link')">Link</button>
<!--  <button class="tablinks" onclick="openCss(event, 'Grid')">Grid</button>
  <button class="tablinks" onclick="openCss(event, 'Icon')">Icon</button>
-->  <button class="tablinks" onclick="openCss(event, 'List')">List</button>
<!--  <button class="tablinks" onclick="openCss(event, 'Tab')">Tab</button>
  <button class="tablinks" onclick="openCss(event, 'Icon')">Icon</button>-->




</div>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<!--         <button  id ="save" type="submit" name="save_theme">Save </button><br>                       -->

    
    
    <form id="themeform" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->createUrl('/themes/cssinput'); ?>">
        <!-- Box Model -->     <div class="scroll-container">

       
        <div id = "BoxModel" class="tabcontent"><br>
                <label><strong>Box Model:</strong></label>
                <label class="label-bold"> Theme Name :</label>
                <input type="text" name="theme_name" id="theme_name" value="<?php echo CHtml::encode($theme->theme_name); ?>"><br>
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
        <p><input type="color" name="h1_color" data-text-type="h1"><br>
                  <label>Font Size :</label>
                <input type="text" id="h1_font_size" name="h1_font_size" data-text-type="h1" > px<br> 
               <input type="range" id="fontSizeSlider" >

<!--                <input type="number" id="fontSizeInput" name="font_size" min="1" max="100" value="16">px<br>
               <input type="range" id="fontSizeSlider" min="10" max="100" value="12">-->
<label for="h1_font_family">Font Family:</label>
<select name="h1_font_family" id="h1_font_family" data-text-type="h1">
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
<!--        <label>Text Shadow:</label>
  <select name="h1_text_shadow_select" class="custom-select">
    <option value="">Select</option>
    <option value=" black">Shadow 1</option>
    <option value="gray">Shadow 2</option>
    <option value=" darkgray">Shadow 3</option>
   <option value=" blue">Shadow 4</option>
<option value=" red">Shadow 5</option>
<option value=" green">Shadow 6</option>-->
   
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
                <input type="color" id="h2_color"  name="h2_color" data-text-type="h2"><br>
                  <label>Font Size :</label>
                <input type="text" id="h2_font_size" name="h2_font_size" data-text-type="h2"> px<br> 
               <input type="range" id="fontSizeSlider" >

<!--                <input type="number" id="fontSizeInput" name="font_size" min="1" max="100" value="16">px<br>
               <input type="range" id="fontSizeSlider" min="10" max="100" value="12">-->
<label for="h2_font_family">Font Family:</label>
<select name="h2_font_family" id="h2_font_family" data-text-type="h2">
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
<!--        <label>Text Shadow:</label>
  <select name="h2_text_shadow_select" class="custom-select">
    <option value="">Select</option>
    <option value=" black">Shadow 1</option>
    <option value="gray">Shadow 2</option>
    <option value=" darkgray">Shadow 3</option>
   <option value=" blue">Shadow 4</option>
<option value=" red">Shadow 5</option>
<option value=" green">Shadow 6</option>
   
  </select><br>-->

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

        <p><input type="color" name="h3_color"><br>
                  <label>Font Size :</label>
                <input type="text" id="h3_font_size" name="h3_font_size" data-text-type="h3"> px<br> 
<!--               <input type="range" id="fontSizeSlider" >-->

<!--                <input type="number" id="fontSizeInput" name="font_size" min="1" max="100" value="16">px<br>
               <input type="range" id="fontSizeSlider" min="10" max="100" value="12">-->
<label for="h3_font_family">Font Family:</label>
<select name="h3_font_family" id="h3_font_family" data-text-type="h3">
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
<!--        <label>Text Shadow:</label>
  <select name="h3_text_shadow_select" class="custom-select" data-text-type="h3">
    <option value="">Select</option>
    <option value=" black">Shadow 1</option>
    <option value="gray">Shadow 2</option>
    <option value=" darkgray">Shadow 3</option>
   <option value=" blue">Shadow 4</option>
<option value=" red">Shadow 5</option>
<option value=" green">Shadow 6</option>
   -->
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

        <p><input type="color" name="body_color"><br>
                  <label>Font Size :</label>
                <input type="text" id="body_font_size" name="body_font_size" data-text-type="body"> px<br> 
               <input type="range" id="fontSizeSlider" >

<!--                <input type="number" id="fontSizeInput" name="font_size" min="1" max="100" value="16">px<br>
               <input type="range" id="fontSizeSlider" min="10" max="100" value="12">-->
<label for="body_font_family">Font Family:</label>
<select name="body_font_family" id="body_font_family" data-text-type="body">
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
<!--        <label>Text Shadow:</label>
  <select name="body_text_shadow_select" class="custom-select" data-text-type="body">
    <option value="">Select</option>
    <option value=" black">Shadow 1</option>
    <option value="gray">Shadow 2</option>
    <option value=" darkgray">Shadow 3</option>
   <option value=" blue">Shadow 4</option>
<option value=" red">Shadow 5</option>
<option value=" green">Shadow 6</option>
   
  </select><br>-->

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

        <p><input type="color" name="p_color"><br>

                  <label>Font Size :</label>
                <input type="text" id="p_font_size" name="p_font_size" data-text-type="p"> px<br> 
               <input type="range" id="fontSizeSlider" >

<!--                <input type="number" id="fontSizeInput" name="font_size" min="1" max="100" value="16">px<br>
               <input type="range" id="fontSizeSlider" min="10" max="100" value="12">-->
<label for="p_font_family">Font Family:</label>
<select name="p_font_family" id="p_font_family" data-text-type="p">
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

<!--                <div id="Text" class="tabcontent"><br>
        <label><strong>Text:</strong></label><br>

        <label>Text Color:</label>
                <input type="color" name="color"><br>
                  <label>Font Size :</label>
                <input type="text" id="fontSizeInput" name="font_size"> px<br> 
               <input type="range" id="fontSizeSlider" >

                <input type="text" id="fontSizeInput" name="font_size" min="1" max="100" value="16">px<br>
               <input type="range" id="fontSizeSlider" min="10" max="100" value="12">
<label for="font_family">Font Family:</label>
<select name="font_family" id="font_family">
    </select>
<br>

        <label>Letter Spacing:</label>
        <input type="text" name="letter_spacing"> px<br>
        <label>Word Spacing:</label>
        <input type="text" name="word_spacing"> px<br>
        <label>Line Height:</label>
        <input type="text" name="line_height"> px<br>
        <label>Text Transform:</label>
        <select name="text_transform" class="custom-select">
            <option value="">Select</option>
            <option value="uppercase">Uppercase</option>
            <option value="lowercase">Lowercase</option>
            <option value="capitalize">Capitalize</option>
            <option value="none">None</option>
        </select><br>
        <label>Text Align:</label>
        <select name="text_align" class="custom-select">
            <option value="">Select</option>
            <option value="left">Left</option>
            <option value="center">Center</option>
            <option value="right">Right</option>
            <option value="justify">Justify</option>
        </select><br>
        <label>Text Shadow:</label>
  <select name="text_shadow_select" class="custom-select">
    <option value="">Select</option>
    <option value=" black">Shadow 1</option>
    <option value="gray">Shadow 2</option>
    <option value=" darkgray">Shadow 3</option>
   <option value=" blue">Shadow 4</option>
<option value=" red">Shadow 5</option>
<option value=" green">Shadow 6</option>
        

    
   
  </select><br>
        <label>Text Indent:</label>
        <input type="text" name="text_indent"> px<br>
        <label>Text Decoration:</label>
        <select name="text_decoration" class="custom-select">
            <option value="">Select</option>
            <option value="none">None</option>
            <option value="underline">Underline</option>
            <option value="overline">Overline</option>
            <option value="line-through">Line Through</option>
        </select><br>
        <label>Text Overflow:</label>
        <select name="text_overflow" class="custom-select">
            <option value="">Select</option>
            <option value="clip">Clip</option>
            <option value="ellipsis">Ellipsis</option>
        </select><br>
        <label>White Space:</label>
        <select name="white_space" class="custom-select">
            <option value="">Select</option>
            <option value="normal">Normal</option>
            <option value="nowrap">No Wrap</option>
            <option value="pre">Pre</option>
            <option value="pre-wrap">Pre Wrap</option>
            <option value="pre-line">Pre Line</option>
        </select><br>
        <label>Text Orientation:</label>
        <select name="text_orientation" class="custom-select">
            <option value="">Select</option>
            <option value="mixed">Mixed</option>
            <option value="upright">Upright</option>
            <option value="sideways">Sideways</option>
            <option value="sideways-right">Sideways Right</option>
        </select><br>
        <label>Text Wrap:</label>
        <select name="text_wrap" class="custom-select">
            <option value="">Select</option>
            <option value="normal">Normal</option>
            <option value="nowrap">No Wrap</option>
            <option value="break-word">Break Word</option>
        </select><br>
        <label>Float Property</label>
         <select name ="float_property" class="custom-select">
                  <option selected disabled>Select</option>

                <option value ="left">Left</option>
                <option value ="right">Right</option>
                <option value ="initial">Initial</option>
                <option value ="inherit">Inherit</option>
                </select><br>-->
<!--                </div>-->
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

                    <!--<label>Size:</label>
                    <select name="background_size" id="background_size">
                      <option value="cover">Cover</option>
                      <option value="contain">Contain</option>
                      <option value="100% 100%">Stretch</option>
                       Add more size options as needed 
                    </select><br>-->
<!--                    <label>Attachment:</label>
                    <select name="background_attachment" class="custom-select">
                      <option selected disabled>Select</option>
                      <option value="scroll">Scroll</option>
                      <option value="fixed">Fixed</option>
                    </select><br>
-->                    <label>Position:</label>
<!--                    <select name="background_position" class="custom-select">
                      <option selected disabled>Select</option>
                      <option value="left top">Left Top</option>
                      <option value="left center">Left Center</option>
                      <option value="left bottom">Left Bottom</option>
                      <option value="center top">Center Top</option>
                      <option value="center center">Center Center</option>
                      <option value="center bottom">Center Bottom</option>
                      <option value="right top">Right Top</option>
                      <option value="right center">Right Center</option>
                      <option value="right bottom">Right Bottom</option>
                    </select><br>  -->
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
            
<!--                         <label><strong>Border:</strong></label><br>
                        <label>Border:</label><br>-->
<!--                        <select name="border" class="custom-select">
                          <option selected disabled>Select</option>
                          <option value="none">None</option>
                          <option value="1px solid">1px Solid</option>
                          <option value="2px dashed">2px Dashed</option>
                          <option value="3px dotted">3px Dotted</option>
                          <option value="1px double">1px Double</option>
                          <option value="1px groove">1px Groove</option>
                          <option value="2px ridge">2px Ridge</option>
                          <option value="2px inset">2px Inset</option>
                          <option value="2px outset">2px Outset</option>-->
                          <!-- Add more options as needed -->
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
<!-- <label for="list_style">List Style:</label>
<select id="list_style" name="list_style">
  <option value="">None</option>
  <option value="disc">Disc</option>
  <option value="circle">Circle</option>
  <option value="square">Square</option>
  <option value="decimal">Decimal</option>
   Add more options as needed 
</select>-->

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
<script>
        // Function to update the input field values when the slider is changed
//        function updateInputValues() {
//            const slider = document.getElementById('slider');
//            const marginInput = document.getElementById('marginInput');
//            const paddingInput = document.getElementById('paddingInput');
//
//            // Update margin and padding input values
//            marginInput.value = slider.value;
//            paddingInput.value = slider.value;
//        }
    </script>
<!--<script>
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
</script>-->
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
    document.addEventListener("DOMContentLoaded", function() {
      var defaultTabButton = document.querySelector(".tablinks");
      defaultTabButton.click();
    });
  </script>
</form>

<div id="themePreviewContainer">


<?php
include 'themePreview.php'; // or require 'themePreview.php';
?>

      <script src="http://localhost/testproject/AjaxFiles/preview.js"></script>
     

<!--<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Get references to form input fields
    const themeForm = document.getElementById('themeform');
    const themePreview = document.getElementById('themePreview');
    const formPreview = document.getElementById('formPreview'); // Create a separate preview element for the form

    // Function to update the "Box Model" properties
    function updateBoxModelProperties() {
      formPreview.style.height = themeForm.height.value + "px";
      formPreview.style.width = themeForm.width.value + "px";
      formPreview.style.margin = `${themeForm.margin_top.value}px ${themeForm.margin_right.value}px ${themeForm.margin_bottom.value}px ${themeForm.margin_left.value}px`;
      formPreview.style.padding = `${themeForm.padding_top.value}px ${themeForm.padding_right.value}px ${themeForm.padding_bottom.value}px ${themeForm.padding_left.value}px`;
      formPreview.style.display = themeForm.display_property.value;
      formPreview.style.clear = themeForm.clear.value;
      formPreview.style.boxSizing = themeForm.box_sizing.value;
      formPreview.style.position = themeForm.position.value;
    }

    // Function to update the "Text" properties
    function updateTextProperties() {
      formPreview.style.color = themeForm.color.value;
      formPreview.style.fontSize = themeForm.size.value + "px";
      formPreview.style.fontFamily = themeForm.font_family.value;
      formPreview.style.textAlign = themeForm.text_align.value;
      formPreview.style.textShadow = themeForm.text_shadow_select.value;
      formPreview.style.textDecoration = themeForm.text_decoration.value;
    }

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
    formPreview.style.opacity = themeForm.themes_opacity.value;
    formPreview.style.transitionProperty = themeForm.themes_transition_property.value;
    formPreview.style.boxShadow = themeForm.themes_box_shadow.value;
    formPreview.style.transitionDuration = themeForm.themes_transition_duration.value + "ms";
    formPreview.style.transitionTimingFunction = themeForm.themes_transition_timing_function.value;
  }
    // Add event listeners for "Box Model" form input fields
    themeForm.height.addEventListener("input", updateBoxModelProperties);
    themeForm.width.addEventListener("input", updateBoxModelProperties);
    themeForm.margin_top.addEventListener("input", updateBoxModelProperties);
    themeForm.margin_right.addEventListener("input", updateBoxModelProperties);
    themeForm.margin_bottom.addEventListener("input", updateBoxModelProperties);
    themeForm.margin_left.addEventListener("input", updateBoxModelProperties);
    themeForm.padding_top.addEventListener("input", updateBoxModelProperties);
    themeForm.padding_right.addEventListener("input", updateBoxModelProperties);
    themeForm.padding_bottom.addEventListener("input", updateBoxModelProperties);
    themeForm.padding_left.addEventListener("input", updateBoxModelProperties);
    themeForm.display_property.addEventListener("input", updateBoxModelProperties);
    themeForm.clear.addEventListener("input", updateBoxModelProperties);
    themeForm.box_sizing.addEventListener("input", updateBoxModelProperties);
    themeForm.position.addEventListener("input", updateBoxModelProperties);

    // Add event listeners for "Text" form input fields
    themeForm.color.addEventListener("input", updateTextProperties);
    themeForm.size.addEventListener("input", updateTextProperties);
    themeForm.font_family.addEventListener("input", updateTextProperties);
    themeForm.text_align.addEventListener("input", updateTextProperties);
    themeForm.text_shadow_select.addEventListener("input", updateTextProperties);
    themeForm.text_decoration.addEventListener("input", updateTextProperties);

    // Add event listeners for "Background" form input fields
    themeForm.background_color.addEventListener("input", updateBackgroundProperties);
    themeForm.background_image.addEventListener("input", updateBackgroundProperties);
    themeForm.background_repeat.addEventListener("input", updateBackgroundProperties);
    
    /////////////Border ////////////////////////////////
    themeForm.border_style.addEventListener("input", updateBorderProperties);
    themeForm.border_width.addEventListener("input", updateBorderProperties);
    themeForm.border_radius.addEventListener("input", updateBorderProperties);
    themeForm.border_color.addEventListener("input", updateBorderProperties);
    
    ////////////////////Transition /////////////////////////
    
    themeForm.themes_opacity.addEventListener("input", updateTransitionProperties);
    themeForm.themes_transition_property.addEventListener("input", updateTransitionProperties);
    themeForm.themes_box_shadow.addEventListener("input", updateTransitionProperties);
    themeForm.themes_transition_duration.addEventListener("input", updateTransitionProperties);
    themeForm.themes_transition_timing_function.addEventListener("input", updateTransitionProperties);

  
  
  

    // Initialize the preview with default styles
    updateBoxModelProperties();
    updateTextProperties();
    updateBackgroundProperties();
    updateBorderProperties();
    updateTransitionProperties();
    
  });
</script> -->
 
<!--      <script>
  function updateTransitionPreview() {
        const duration = document.getElementById('transition_duration').value;
        const timingFunction = document.getElementById('transition_timing_function').value;

        const previewBox = document.getElementById('formPreview');
        previewBox.style.transitionDuration = duration;
        previewBox.style.transitionTimingFunction = timingFunction;
    }

    // Attach event listeners to input fields for live updates
    document.getElementById('transition_duration').addEventListener('input', updateTransitionPreview);
    document.getElementById('transition_timing_function').addEventListener('change', updateTransitionPreview);
</script>-->
 
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
 // Function to collect property values for the selected text type
//function collectPropertyValuesForTextType(textType) {
//    // Collect the property values for the specified text type based on the input fields in the HTML
//    // Example:
//    let color = document.querySelector(`#${textType} input[name="color"]`).value;
//    let fontSize = document.querySelector(`#${textType} input[name="font_size"]`).value;
//    let fontFamily = document.querySelector(`#${textType} select[name="font_family"]`).value;
//    let textAlign = document.querySelector(`#${textType} select[name="text_align"]`).value;
//    let textShadow = document.querySelector(`#${textType} select[name="text_shadow_select"]`).value;
//    let textDecoration = document.querySelector(`#${textType} select[name="text_decoration"]`).value;
//
//    // Create an object to hold the property values
//    let propertyValues = {
//        color,
//        fontSize,
//        fontFamily,
//        textAlign,
//        textShadow,
//        textDecoration
//    };
//
//    return propertyValues;
//}

// Rest of the script remains the same

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

    // Store the current text type in a hidden input field for later use
//    let currentTextTypeInput = document.querySelector(`#${textType} input[name="current_text_type"]`);
//    currentTextTypeInput.value = textType;
//
//    // Collect property values for the selected text type
//    let propertyValues = collectPropertyValuesForTextType(textType);
//
//    // Send property values and the current text type to the server
//    sendPropertyValuesToServer(propertyValues, textType);
//}
//
//// Function to send property values and the current text type to the server
//function sendPropertyValuesToServer(propertyValues, currentTextType) {
//    // Make an AJAX request to send the property values and current text type to the server for storage
//    // You'll need to send the propertyValues object and currentTextType to your server endpoint using an appropriate method (e.g., POST)
//    // Example using fetch:
//    fetch('index.php?r=themes/saveTextTypeProperties&themeId=${themeId}&textType=${currentTextType}',
//    {
//        method: 'POST',
//        headers: {
//            'Content-Type': 'application/json'
//        },
//        body: JSON.stringify({
//            propertyValues,
//            currentTextType
//        })
//    })
//    .then(response => {
//        // Handle the response from the server
//        // This could involve updating the UI or handling any errors
//        console.log('Property values and current text type saved successfully');
//    })
//    .catch(error => {
//        console.error('Error saving property values and current text type:', error);
//    });
}


    </script>