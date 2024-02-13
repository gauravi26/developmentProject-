<!--tab-view-updatetheme_element_value-->

<style>/* Custom Styles */
    .nav-pills .nav-link {
      color: #ffffff;
      background-color: #007bff;
      border-radius: 0;
      padding: 10px 20px;
      margin-right: 10px;
      font-weight: bold;
      transition: background-color 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .nav-pills .nav-link:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #ffffff;
      opacity: 0;
      transform: translateY(100%);
      transition: opacity 0.3s ease, transform 0.3s ease;
      z-index: -1;
    }

    .nav-pills .nav-link:hover:before,
    .nav-pills .nav-link:focus:before {
      opacity: 0.1;
      transform: translateY(0);
    }

    .nav-pills .nav-link.active:before {
      opacity: 0.1;
      transform: translateY(0);
      z-index: -1;
    }

    .nav-pills .nav-link span {
      position: relative;
      z-index: 1;
    }

    .tab-content {
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 0 4px 4px 4px;
      border-top: 2px solid #0056b3;
    }

    h3 {
      color: #0056b3;
      font-size: 24px;
      margin-bottom: 10px;
    }

    
    h4{
        font-color: blue;
        font-size: 20px
        
    }
    p {
      color: #333333;
      font-size: 16px;
    }

     #Size .label {
        display: inline-block;
        width: 100px;
        text-align: right;
        margin-bottom: 10px;
    }

     #Size input[type="text"] {
        padding: 5px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }
     .nested-tabcontainer {
    display: none;
  }

   .nested-tab {
    text-align: left;
  }

  .nested-tab button {
    margin-right: 5px;
  }

  /* Styles for the nested tab content */
  .nested-tabcontent {
    display: none;
    padding: 20px;
    border: 1px solid #ccc;
    margin-top: 10px;
  }

  /* Additional styles for specific elements within the nested tab content */
  .nested-tabcontent h4 {
    margin-top: 0;
  }

  .nested-tabcontent label {
    display: inline-block;
    width: 150px;
    text-align: right;
    margin-right: 10px;
  }

  .nested-tabcontent input,
  .nested-tabcontent select {
    padding: 5px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
  }
</style>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="http://localhost/testproject/AjaxFiles/tab-view-updatetheme_element_value.js"></script>

<?php 
$themeId = is_array($elementModels) ? $elementModels[0]->theme_ID : $elementModels->theme_ID; 
$themeName = Themes::model()->findByPK($themeId,'ID','theme_name');
$themeModel = Themes::model()->findByPK($themeId,'ID','theme_name');
$themeName = $themeModel !== null ? $themeModel->theme_name : 'N/A';
// var_dump($themeName);
// die();
$formElementCssPropertiesId = range(1, 160);

?>
    <p>Selected Theme Name: <?php echo $themeName; ?></p>


<h1>Change/Update Element's CSS Property Value</h1>


<div class="tab">
  <button class="tablinks" onclick="openCss(event, 'Form')">Form</button>
  <button class="tablinks" onclick="openCss(event, 'Input')">Input</button>
  <button class="tablinks" onclick="openCss(event, 'Label')">Label</button>
  <button class="tablinks" onclick="openCss(event, 'Select_Input')">Select Input</button>
  <button class="tablinks" onclick="openCss(event, 'Radio_Button')">Radio Button</button>
  <button class="tablinks" onclick="openCss(event, 'Check_Box')">Check Box</button>
  <button class="tablinks" onclick="openCss(event, 'Button')">Button</button>
</div>

<div id="Form" class="tabcontent">
  <h3>Form</h3>
  <!-- Content for the "Form" tab goes here -->
  
<div id="nestedTabContainer" style="display: none;">
  <div class="nested-tab">
    <button class="nested-tablinks" onclick="openNestedTab(event, 'Size')">Size</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'Color')">Color</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'Font')">Font</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'Text')">Text</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'Transition')">Transition</button>
  </div><br>
    <div id="Size" class="nested-tabcontent"><br>
     
    <h4>Size</h4>
    <!-- Content for the "Size" tab goes here -->

<?php
$this->beginWidget('CActiveForm', array(
    'id' => 'tabview-form-id',
    'enableAjaxValidation' => false,
    // other form options
));
?>
       <div>

    <label>Height:</label>
  <input type="text" name="Form_Size_height" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 118) : ''; ?>"> px<br>
  <input type="hidden" name="theme_id" value="<?php echo $themeId; ?>">
<input type="hidden" name="form_element_css_properties_id" value="<?php echo $formElementCssPropertiesId[118]; ?>">
</div>
    
<div>
  <label>Width:</label>
  <input type="text" name="Form_Size_width" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 102) : ''; ?>"> px<br>
  <input type="hidden" name="theme_id" value="<?php echo $themeId; ?>">
<input type="hidden" name="form_element_css_properties_id" value="<?php  ?>">
</div>
    <div>
  <label>Padding:</label>
  <input type="text" name="Form_Size_padding" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 103) : ''; ?>"> px<br>
  <input type="hidden" name="theme_id" value="<?php echo $themeId; ?>">
<input type="hidden" name="form_element_css_properties_id" value="<?php echo $formElementCssPropertiesId[103]; ?>">
</div>


<div>
  <label>Border:</label>
  <input type="text" name="Form_Size_border" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 104) : ''; ?>"><br>
  <input type="hidden" name="theme_id" value="<?php echo $themeId; ?>">
  <input type="hidden" name="form_element_css_properties_id" value="<?php //echo $formElementCssPropertiesId[]; ?>">
</div>

<div>
  <label>Border Radius:</label>
  <input type="text" name="Form_Size_border-radius" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 105) : ''; ?>"><br>
  <input type="hidden" name="theme_id" value="<?php echo $themeId; ?>">
  <input type="hidden" name="form_element_css_properties_id" value="<?php  ?>">
</div>

<div>
  <label>Box Size:</label>
  <input type="text" name="Form_Size_box-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 106) : ''; ?>"><br>
  <input type="hidden" name="theme_id" value="<?php echo $themeId; ?>">
  <input type="hidden" name="form_element_css_properties_id" value="<?php ?>">
</div>

<div>
  <label>Position:</label>
  <select name="Form_Element_Css_Property_position" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 117) : ''; ?>">
    <option value="static">Static</option>
    <option value="relative">Relative</option>
    <option value="absolute">Absolute</option>
    <option value="fixed">Fixed</option>
    <option value="sticky">Sticky</option>
  </select><br>
  <input type="hidden" name="theme_id" value="<?php echo $themeId; ?>">
  <input type="hidden" name="form_element_css_properties_id" value="<?php  ?>">
</div>

<div>
  <label>Margin:</label>
  <input type="number" name="Form_Size_margin" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 110) : ''; ?>">px<br>
  <input type="hidden" name="theme_id" value="<?php echo $themeId; ?>">
  <input type="hidden" name="form_element_css_properties_id" value="<?php  ?>">
</div>

<div >
    <label >Display:</label>
    <select name="Form_Size_display" <?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 112) : ''; ?> >
        <option value="block">Block</option>
        <option value="inline">Inline</option>
        <option value="inline-block">Inline Block</option>
        <option value="flex">Flex</option>
        <option value="grid">Grid</option>
    </select><br>
</div>

<div >
    <label >Clear:</label>
    <select name="Form_Size_clear" <?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 116) : ''; ?>>
        <option value="none">None</option>
        <option value="left">Left</option>
        <option value="right">Right</option>
        <option value="both">Both</option>
    </select><br>
</div>
    
<div>
        <button type="submit" name="save">Save </button><br>                
</div>

  </div>
  
  <div id="Color" class="nested-tabcontent">
    <h4>Color</h4>
    <!-- Content for the "Color" tab goes here -->
    <div >
    <label >Font Color:</label>
    <input type="color" name="Form_Color_font-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 109) : ''; ?>" ><br>
</div>

<div >
    <label >Background Color:</label>
    <input type="color" name="Form_Color_background-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 108) : ''; ?>" ><br>
</div>

<div >
    <label >Border Color:</label>
    <input type="color" name="Form_Color_border-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 114) : ''; ?>" ><br>
</div>
  </div>
    <div id="Font" class="nested-tabcontent">
    <h4>Font</h4>
    <!-- Content for the "Font" tab goes here -->
  <div >
    <label >Font Size:</label>
    <input type="number" name="Form_Font_font-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 107) : ''; ?>" ><br>
</div>

<div >
    <label >Font Weight:</label>
    <select name="Form_Font_font-weight" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 111) : ''; ?>" >
        <option value="normal">Normal</option>
        <option value="bold">Bold</option>
        <option value="bolder">Bolder</option>
        <option value="lighter">Lighter</option>
    </select><br>
</div>

<div >
    <label >Font Style:</label>
    <select name="Form_Font_font-style" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 113) : ''; ?>" >
        <option value="normal">Normal</option>
        <option value="italic">Italic</option>
        <option value="oblique">Oblique</option>
    </select><br>
</div>


  </div>

  <!-- Nested tab content for "Text" -->
  <div id="Text" class="nested-tabcontent">
    <h4>Text</h4>
    <!-- Content for the "Text" tab goes here -->
    <div >
    <label >Text Align:</label>
    <select name="Form_Text_text-align" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 115) : '';?>">
        <option value="left">Left</option>
        <option value="center">Center</option>
        <option value="right">Right</option>
        <option value="justify">Justify</option>
    </select><br>
</div>

<div >
    <label >Text Decoration:</label>
    <select name="Form_Text_text-decoration"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 119) : '';?>">
        <option value="none">None</option>
        <option value="underline">Underline</option>
        <option value="overline">Overline</option>
        <option value="line-through">Line-through</option>
    </select><br>
</div>

  </div>

  <!-- Nested tab content for "Transition" -->
  <div id="Transition" class="nested-tabcontent">
    <h4>Transition</h4>
    <!-- Content for the "Transition" tab goes here -->
  <div >
    <label >Box Shadow:</label>
    <input type="text" name="Form_Transition_box-shadow" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 120) : ''; ?>" ><br>
</div>

<div >
    <label >Opacity:</label>
    <input type="number" name="Form_Transition_opacity" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 121) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Property:</label>
    <input type="text" name="Form_Transition_transition-property" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 122) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Duration:</label>
    <input type="number" name="Form_Transition_transition-duration" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 123) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Timing Function:</label>
    <select name="Form_Transition_transition-timing-function"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 124) : '';?>">
        <option value="linear">Linear</option>
        <option value="ease">Ease</option>
        <option value="ease-in">Ease In</option>
        <option value="ease-out">Ease Out</option>
        <option value="ease-in-out">Ease In Out</option>
    </select><br>
</div>

<div >
    <label >Resize:</label>
    <select name="Form_Transition_resize"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 125) : '';?>">
        <option value="none">None</option>
        <option value="both">Both</option>
        <option value="horizontal">Horizontal</option>
        <option value="vertical">Vertical</option>
    </select><br>
</div>

  </div>
  <div>
        <button type="submit" name="save">Save </button><br>                
</div>
</div>
</div>
</form>

<div id="Input" class="tabcontent">
  <h3>Input</h3>
  <!-- Content for the "Input" tab goes here -->
  
<div id="inputNestedTabContainer" style="display: block;">
  <div class="nested-tab">
    <button class="nested-tablinks" onclick="openNestedTab(event, 'InputSize')">Size</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'InputColor')">Color</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'InputFont')">Font</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'InputText')">Text</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'InputTransition')">Transition</button>
  </div><br>
    <div id="InputSize" class="nested-tabcontent"><br>
        <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'tabview-form-id',
    'enableAjaxValidation' => false,
)); ?>
     
    <h4>Size</h4>
    <!-- Content for the "Size" tab goes here -->
    <div >
    <label >Height:</label>
    <input type="text" name="Input_Size_height" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 17) : ''; ?>" > px<br>
  <input type="hidden" name="theme_id" value="<?php echo $themeId; ?>">
<input type="hidden" name="form_element_css_properties_id" value="<?php echo $formElementCssPropertiesId[17]; ?>">
    </div>
    
    <div >
    <label >Width:</label>
    <input type="text" name="Input_Size_width" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 1) : ''; ?>" > px<br>
</div>
    <div >
    <label >Padding:</label>
    <input type="text" name="Input_Size_padding" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 2) : ''; ?>" > px<br>
</div>
  <div >
    <label >Border:</label>
    <input type="text" name="Input_Size_border" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 3) : ''; ?>" ><br>
</div>

<div >
    <label >Border Radius:</label>
    <input type="text" name="Input_Size_border-radius" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 4) : ''; ?>" ><br>
</div>

<div >
    <label >Box Size:</label>
    <input type="text" name="Input_Size_box-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 5) : ''; ?>" ><br>
</div>

<div >
    <label >Position:</label>
    <select name="Input_Size_position"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 16) : '';?>">
        <option value="static">Static</option>
        <option value="relative">Relative</option>
        <option value="absolute">Absolute</option>
        <option value="fixed">Fixed</option>
        <option value="sticky">Sticky</option>
    </select><br>
</div>

<div >
    <label >Margin:</label>
    <input type="number" name="Input_Size_margin" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 9) : ''; ?>" >px<br>
</div>

<div >
    <label >Display:</label>
    <select name="Input_Size_display"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 11) : '';?>">
        <option value="block">Block</option>
        <option value="inline">Inline</option>
        <option value="inline-block">Inline Block</option>
        <option value="flex">Flex</option>
        <option value="grid">Grid</option>
    </select><br>
</div>

<div >
    <label >Clear:</label>
    <select name="Input_Size_clear"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 15) : '';?>">
        <option value="none">None</option>
        <option value="left">Left</option>
        <option value="right">Right</option>
        <option value="both">Both</option>
    </select><br>
</div>


  </div>
  
  <div id="InputColor" class="nested-tabcontent">
    <h4>Color</h4>
    <!-- Content for the "Color" tab goes here -->
    <div >
    <label >Font Color:</label>
    <input type="color" name="Input_Color_font-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 8) : ''; ?>" ><br>
</div>

<div >
    <label >Background Color:</label>
    <input type="color" name="Input_Color_background-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 7) : ''; ?>" ><br>
</div>

<div >
    <label >Border Color:</label>
    <input type="color" name="Input_Color_border-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 13) : ''; ?>" ><br>
</div>
  </div>
    <div id="InputFont" class="nested-tabcontent">
    <h4>Font</h4>
    <!-- Content for the "Font" tab goes here -->
  <div >
    <label >Font Size:</label>
    <input type="number" name="Input_Font_font-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 6) : ''; ?>" ><br>
</div>

<div >
    <label >Font Weight:</label>
    <select name="Input_Font_font-weight"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 10) : '';?>" >
        <option value="normal">Normal</option>
        <option value="bold">Bold</option>
        <option value="bolder">Bolder</option>
        <option value="lighter">Lighter</option>
    </select><br>
</div>

<div >
    <label >Font Style:</label>
    <select name="Input_Font_font-style"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 12) : '';?>">
        <option value="normal">Normal</option>
        <option value="italic">Italic</option>
        <option value="oblique">Oblique</option>
    </select><br>
</div>


  </div>

  <!-- Nested tab content for "Text" -->
  <div id="InputText" class="nested-tabcontent">
    <h4>Text</h4>
    <!-- Content for the "Text" tab goes here -->
    <div >
    <label >Text Align:</label>
    <select name="Input_Text_text-align"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 14) : '';?>" >
        <option value="left">Left</option>
        <option value="center">Center</option>
        <option value="right">Right</option>
        <option value="justify">Justify</option>
    </select><br>
</div>

<div >
    <label >Text Decoration:</label>
    <select name="Input_Text_text-decoration"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 18) : '';?>">
        <option value="none">None</option>
        <option value="underline">Underline</option>
        <option value="overline">Overline</option>
        <option value="line-through">Line-through</option>
    </select><br>
</div>

  </div>

  <!-- Nested tab content for "Transition" -->
  <div id="InputTransition" class="nested-tabcontent">
    <h4>Transition</h4>
    <!-- Content for the "Transition" tab goes here -->
  <div >
    <label >Box Shadow:</label>
    <input type="text" name="Input_Transition_box-shadow" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 19) : ''; ?>" ><br>
</div>

<div >
    <label >Opacity:</label>
    <input type="number" name="Input_Transition_opacity" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 20) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Property:</label>
    <input type="text" name="Input_Transition_transition-property" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 21) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Duration:</label>
    <input type="number" name="Input_Transition_transition-duration" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 22) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Timing Function:</label>
    <select name="Input_Transition_transition-timing-function"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 23) : '';?>">
        <option value="linear">Linear</option>
        <option value="ease">Ease</option>
        <option value="ease-in">Ease In</option>
        <option value="ease-out">Ease Out</option>
        <option value="ease-in-out">Ease In Out</option>
    </select><br>
</div>

<div >
    <label >Resize:</label>
    <select name="Input_Transition_resize"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 24) : '';?>" >
        <option value="none">None</option>
        <option value="both">Both</option>
        <option value="horizontal">Horizontal</option>
        <option value="vertical">Vertical</option>
    </select><br>
</div>

  </div>
  <div>
    <?php echo CHtml::submitButton('Save', array('name' => 'save')); ?>
</div>
</div>
</div>
<?php $this->endWidget(); ?>


<div id="Label" class="tabcontent">
  <h3>Label</h3>
  <!-- Content for the "Label" tab goes here -->
  <div id="labelNestedTabContainer" style="display: block;">
  <div class="nested-tab">
    <button class="nested-tablinks" onclick="openNestedTab(event, 'LableSize')">Size</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'LableColor')">Color</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'LableFont')">Font</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'LableText')">Text</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'LableTransition')">Transition</button>
  </div><br>
    <div id="LableSize" class="nested-tabcontent"><br>
        
     <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'tabview-form-id',
    'enableAjaxValidation' => false,
)); ?>
    <h4>Size</h4>
    <!-- Content for the "Size" tab goes here -->
    <div >
    <label >Height:</label>
    <input type="text" name="Label_Size_height" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 42) : ''; ?>" > px<br>
</div>

<div >
    <label >Width:</label>
    <input type="text" name="Label_Size_width" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 26) : ''; ?>" > px<br>
</div>
  <div >
    <label >Border:</label>
    <input type="text" name="Label_Size_border" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 27) : ''; ?>" ><br>
</div>

<div >
    <label >Border Radius:</label>
    <input type="text" name="Label_Size_border-radius" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 29) : ''; ?>" ><br>
</div>

<div >
    <label >Box Size:</label>
    <input type="text" name="Label_Size_box-size"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 30) : '';?> ?>" ><br>
</div>

<div >
    <label >Position:</label>
    <select name="Label_Size_position"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 41) : '';?>">
        <option value="static">Static</option>
        <option value="relative">Relative</option>
        <option value="absolute">Absolute</option>
        <option value="fixed">Fixed</option>
        <option value="sticky">Sticky</option>
    </select><br>
</div>

<div >
    <label >Margin:</label>
    <input type="number" name="Label_Size_margin" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 34) : ''; ?>" >px<br>
</div>

<div >
    <label >Display:</label>
    <select name="Label_Size_display"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 36) : '';?>" >
        <option value="block">Block</option>
        <option value="inline">Inline</option>
        <option value="inline-block">Inline Block</option>
        <option value="flex">Flex</option>
        <option value="grid">Grid</option>
    </select><br>
</div>

<div >
    <label >Clear:</label>
    <select name="Label_Size_clear"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 40) : '';?>">
        <option value="none">None</option>
        <option value="left">Left</option>
        <option value="right">Right</option>
        <option value="both">Both</option>
    </select><br>
</div>


  </div>
  
  <div id="LableColor" class="nested-tabcontent">
    <h4>Color</h4>
    <!-- Content for the "Color" tab goes here -->
    <div >
    <label >Font Color:</label>
    <input type="color" name="Label_Color_font-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 33) : ''; ?>" ><br>
</div>

<div >
    <label >Background Color:</label>
    <input type="color" name="Label_Color_background-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 32) : ''; ?>" ><br>
</div>

<div >
    <label >Border Color:</label>
    <input type="color" name="Label_Color_border-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 38) : ''; ?>" ><br>
</div>
  </div>
    <div id="LableFont" class="nested-tabcontent">
    <h4>Font</h4>
    <!-- Content for the "Font" tab goes here -->
  <div >
    <label >Font Size:</label>
    <input type="number" name="Label_Font_font-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 31) : ''; ?>" ><br>
</div>

<div >
    <label >Font Weight:</label>
    <select name="Label_Font_font-weight"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 35) : '';?>" >
        <option value="normal">Normal</option>
        <option value="bold">Bold</option>
        <option value="bolder">Bolder</option>
        <option value="lighter">Lighter</option>
    </select><br>
</div>

<div >
    <label >Font Style:</label>
    <select name="Label_Font_font-style" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 37) : '';?>" >
        <option value="normal">Normal</option>
        <option value="italic">Italic</option>
        <option value="oblique">Oblique</option>
    </select><br>
</div>


  </div>

  <!-- Nested tab content for "Text" -->
  <div id="LableText" class="nested-tabcontent">
    <h4>Text</h4>
    <!-- Content for the "Text" tab goes here -->
    <div >
    <label >Text Align:</label>
    <select name="Label_Text_text-align"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 39) : '';?>" >
        <option value="left">Left</option>
        <option value="center">Center</option>
        <option value="right">Right</option>
        <option value="justify">Justify</option>
    </select><br>
</div>

<div >
    <label >Text Decoration:</label>
    <select name="Label_Text_text-decoration"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 43) : '';?>" >
        <option value="none">None</option>
        <option value="underline">Underline</option>
        <option value="overline">Overline</option>
        <option value="line-through">Line-through</option>
    </select><br>
</div>

  </div>

  <!-- Nested tab content for "Transition" -->
  <div id="LableTransition" class="nested-tabcontent">
    <h4>Transition</h4>
    <!-- Content for the "Transition" tab goes here -->
  <div >
    <label >Box Shadow:</label>
    <input type="text" name="Label_Transition_box-shadow" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 44) : ''; ?>" ><br>
</div>

<div >
    <label >Opacity:</label>
    <input type="number" name="Label_Transition_opacity" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 45) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Property:</label>
    <input type="text" name="Label_Transition_transition-property" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 46) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Duration:</label>
    <input type="number" name="Label_Transition_transition-duration" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 47) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Timing Function:</label>
    <select name="Label_Transition_transition-timing-function"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 48) : '';?>" >
        <option value="linear">Linear</option>
        <option value="ease">Ease</option>
        <option value="ease-in">Ease In</option>
        <option value="ease-out">Ease Out</option>
        <option value="ease-in-out">Ease In Out</option>
    </select><br>
</div>

<div >
    <label >Resize:</label>
    <select name="Label_Transition_resize"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 49) : '';?>">
        <option value="none">None</option>
        <option value="both">Both</option>
        <option value="horizontal">Horizontal</option>
        <option value="vertical">Vertical</option>
    </select><br>
</div>

  </div>
   
</div>
  <div>
        <button type="submit" name="save">Save </button><br>                
</div>
</div>
<?php $this->endWidget(); ?>

<div id="Select_Input" class="tabcontent">
  <h3>Select Input</h3>
  <!-- Content for the "Select Input" tab goes here -->
  <div id="selectInputNestedTabContainer" style="display: block;">
  <div class="nested-tab">
    <button class="nested-tablinks" onclick="openNestedTab(event, 'SelectInputSize')">Size</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'SelectInputColor')">Color</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'SelectInputFont')">Font</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'SelectInputText')">Text</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'SelectInputTransition')">Transition</button>
  </div><br>
    <div id="SelectInputSize" class="nested-tabcontent"><br>
     
        <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'tabview-form-id',
    'enableAjaxValidation' => false,
)); ?>
    <h4>Size</h4>
    <!-- Content for the "Size" tab goes here -->
    <div >
    <label >Height:</label>
    <input type="text" name="SelectInputSize_height" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 67) : ''; ?>" > px<br>
</div>

<div >
    <label >Width:</label>
    <input type="text" name="SelectInputSize_width" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 51) : ''; ?>" > px<br>
</div>
    <div >
    <label >Width:</label>
    <input type="text" name="SelectInputSize_padding" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 52) : ''; ?>" > px<br>
</div>
  <div >
    <label >Border:</label>
    <input type="text" name="SelectInputSize_border" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 53) : ''; ?>" ><br>
</div>

<div >
    <label >Border Radius:</label>
    <input type="text" name="SelectInputSize_border-radius" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 54) : ''; ?>" ><br>
</div>

<div >
    <label >Box Size:</label>
    <input type="text" name="SelectInputSize_box-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 55) : ''; ?>" ><br>
</div>

<div >
    <label >Position:</label>
    <select name="SelectInputSize_position"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 66) : '';?>" >
        <option value="static">Static</option>
        <option value="relative">Relative</option>
        <option value="absolute">Absolute</option>
        <option value="fixed">Fixed</option>
        <option value="sticky">Sticky</option>
    </select><br>
</div>

<div >
    <label >Margin:</label>
    <input type="number" name="SelectInputSize_margin" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 59) : ''; ?>" >px<br>
</div>

<div >
    <label >Display:</label>
    <select name="SelectInputSize_display"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 61) : '';?>" >
        <option value="block">Block</option>
        <option value="inline">Inline</option>
        <option value="inline-block">Inline Block</option>
        <option value="flex">Flex</option>
        <option value="grid">Grid</option>
    </select><br>
</div>

<div >
    <label >Clear:</label>
    <select name="SelectInputSize_clear"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 65) : '';?>">
        <option value="none">None</option>
        <option value="left">Left</option>
        <option value="right">Right</option>
        <option value="both">Both</option>
    </select><br>
</div>


  </div>
  
  <div id="SelectInputColor" class="nested-tabcontent">
    <h4>Color</h4>
    <!-- Content for the "Color" tab goes here -->
    <div >
    <label >Font Color:</label>
    <input type="color" name="SelectInput_Color_font-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 58) : ''; ?>" ><br>
</div>

<div >
    <label >Background Color:</label>
    <input type="color" name="SelectInput_Color_background-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 75) : ''; ?>" ><br>
</div>

<div >
    <label >Border Color:</label>
    <input type="color" name="SelectInput_Color_border-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 63) : ''; ?>" ><br>
</div>
  </div>
    <div id="SelectInputFont" class="nested-tabcontent">
    <h4>Font</h4>
    <!-- Content for the "Font" tab goes here -->
  <div >
    <label >Font Size:</label>
    <input type="number" name="SelectInput_Font_font-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 56) : ''; ?>" ><br>
</div>

<div >
    <label >Font Weight:</label>
    <select name="SelectInput_Font_font-weight"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 60) : '';?>" >
        <option value="normal">Normal</option>
        <option value="bold">Bold</option>
        <option value="bolder">Bolder</option>
        <option value="lighter">Lighter</option>
    </select><br>
</div>

<div >
    <label >Font Style:</label>
    <select name="SelectInput_Font_font-style"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 62) : '';?>" >
        <option value="normal">Normal</option>
        <option value="italic">Italic</option>
        <option value="oblique">Oblique</option>
    </select><br>
</div>


  </div>

  <!-- Nested tab content for "Text" -->
  <div id="SelectInputText" class="nested-tabcontent">
    <h4>Text</h4>
    <!-- Content for the "Text" tab goes here -->
    <div >
    <label >Text Align:</label>
    <select name="SelectInput_Text_text-align"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 64) : '';?>" >
        <option value="left">Left</option>
        <option value="center">Center</option>
        <option value="right">Right</option>
        <option value="justify">Justify</option>
    </select><br>
</div>

<div >
    <label >Text Decoration:</label>
    <select name="SelectInput_Text_text-decoration"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 68) : '';?>">
        <option value="none">None</option>
        <option value="underline">Underline</option>
        <option value="overline">Overline</option>
        <option value="line-through">Line-through</option>
    </select><br>
</div>

  </div>

  <!-- Nested tab content for "Transition" -->
  <div id="SelectInputTransition" class="nested-tabcontent" >
    <h4>Transition</h4>
    <!-- Content for the "Transition" tab goes here -->
  <div >
    <label >Box Shadow:</label>
    <input type="text" name="SelectInput_Transition_box-shadow" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 69) : ''; ?>" ><br>
</div>

<div >
    <label >Opacity:</label>
    <input type="number" name="SelectInput_Transition_opacity" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 70) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Property:</label>
    <input type="text" name="SelectInput_Transition_transition-property" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 71) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Duration:</label>
    <input type="number" name="SelectInput_Transition_transition-duration" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 72) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Timing Function:</label>
    <select name="SelectInput_Transition_transition-timing-function"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 73) : '';?>" >
        <option value="linear">Linear</option>
        <option value="ease">Ease</option>
        <option value="ease-in">Ease In</option>
        <option value="ease-out">Ease Out</option>
        <option value="ease-in-out">Ease In Out</option>
    </select><br>
</div>

<div >
    <label >Resize:</label>
    <select name="SelectInput_Transition_resize"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 74) : '';?>" >
        <option value="none">None</option>
        <option value="both">Both</option>
        <option value="horizontal">Horizontal</option>
        <option value="vertical">Vertical</option>
    </select><br>
</div>

  </div>
     <div>
        <button type="submit" name="save">Save </button><br>                
</div>
</div>
 
</div>
<?php $this->endWidget(); ?>

<div id="Radio_Button" class="tabcontent">
  <h3>Radio Button</h3>
  <!-- Content for the "Radio Button" tab goes here -->
   <div id="radioButtonNestedTabContainer" style="display: block;">
  <div class="nested-tab">
    <button class="nested-tablinks" onclick="openNestedTab(event, 'RadioButtonSize')">Size</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'RadioButtonColor')">Color</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'RadioButtonFont')">Font</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'RadioButtonText')">Text</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'RadioButtonTransition')">Transition</button>
  </div><br>
    


<div id="RadioButtonSize" class="nested-tabcontent"><br>
    <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'tabview-form-id',
    'enableAjaxValidation' => false,
)); ?>
     
    <h4>Size</h4>
    <!-- Content for the "Size" tab goes here -->
    <div >
    <label >Height:</label>
    <input type="text" name="Radio_ButtonSize_height" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 92) : ''; ?>" > px<br>
</div>

<div >
    <label >Height:</label>
    <input type="text" name="Radio_ButtonSize_height" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 143) : ''; ?>" > px<br>
</div>

<div >
    <label >Width:</label>
    <input type="text" name="Radio_ButtonSize_width" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 142) : ''; ?>" > px<br>
</div>
    <div >
    <label >Padding:</label>
    <input type="text" name="Radio_ButtonSize_padding" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 148) : ''; ?>" > px<br>
</div>
  <div >
    <label >Border:</label>
    <input type="text" name="Radio_ButtonSize_border" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 144) : ''; ?>" ><br>
</div>

<div >
    <label >Border Radius:</label>
    <input type="text" name="Radio_ButtonSize_border-radius" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 145) : ''; ?>" ><br>
</div>

<!--<div >
    <label >Box Size:</label>
    <input type="text" name="Radio_ButtonSize_box-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 000) : ''; ?>" ><br>
</div>-->

<div >
    <label >Position:</label>
    <select name="Radio_ButtonSize_position"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 151) : '';?>" >
        <option value="static">Static</option>
        <option value="relative">Relative</option>
        <option value="absolute">Absolute</option>
        <option value="fixed">Fixed</option>
        <option value="sticky">Sticky</option>
    </select><br>
</div>

<div >
    <label >Margin:</label>
    <input type="number" name="Radio_ButtonSize_margin" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 149) : ''; ?>" >px<br>
</div>

<div >
    <label >Display:</label>
    <select name="Radio_ButtonSize_display"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 150) : '';?>" >
        <option value="block">Block</option>
        <option value="inline">Inline</option>
        <option value="inline-block">Inline Block</option>
        <option value="flex">Flex</option>
        <option value="grid">Grid</option>
    </select><br>
</div>

<!--<div >
    <label >Clear:</label>
    <select name="Radio_ButtonSize_clear"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 115) : '';?>" >
        <option value="none">None</option>
        <option value="left">Left</option>
        <option value="right">Right</option>
        <option value="both">Both</option>
    </select><br>
</div>-->


  </div>
  
  <div id="RadioButtonColor" class="nested-tabcontent">
    <h4>Color</h4>
    <!-- Content for the "Color" tab goes here -->
    <div >
    <label >Font Color:</label>
    <input type="color" name="Radio_Button_Color_font-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 147) : ''; ?>" ><br>
</div>

<div >
    <label >Background Color:</label>
    <input type="color" name="Radio_Button_Color_background-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 146) : ''; ?>" ><br>
</div>

<div >
    <label >Border Color:</label>
    <input type="color" name="Radio_Button_Color_border-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 157) : ''; ?>" ><br>
</div>
  </div>
    <div id="RadioButtonFont" class="nested-tabcontent">
    <h4>Font</h4>
    <!-- Content for the "Font" tab goes here -->
  <div >
    <label >Font Size:</label>
    <input type="number" name="Radio_Button_Font_font-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 158) : ''; ?>" ><br>
</div>

<div >
    <label >Font Weight:</label>
    <select name="Radio_Button_Font_font-weight"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 159) : '';?>" >
        <option value="normal">Normal</option>
        <option value="bold">Bold</option>
        <option value="bolder">Bolder</option>
        <option value="lighter">Lighter</option>
    </select><br>
</div>

<div >
    <label >Font Style:</label>
    <select name="Radio_Button_Font_font-style"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 160) : '';?>">
        <option value="normal">Normal</option>
        <option value="italic">Italic</option>
        <option value="oblique">Oblique</option>
    </select><br>
</div>


  </div>

  <!-- Nested tab content for "Text" -->
  <div id="RadioButtonText" class="nested-tabcontent">
    <h4>Text</h4>
    <!-- Content for the "Text" tab goes here -->
    <div >
    <label >Text Align:</label>
    <select name="Radio_Button_Text_text-align"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 152) : '';?>">
        <option value="left">Left</option>
        <option value="center">Center</option>
        <option value="right">Right</option>
        <option value="justify">Justify</option>
    </select><br>
</div>

<!--<div >
    <label >Text Decoration:</label>
    <select name="Radio_Button_Text_text-decoration"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 115) : '';?>">
        <option value="none">None</option>
        <option value="underline">Underline</option>
        <option value="overline">Overline</option>
        <option value="line-through">Line-through</option>
    </select><br>
</div>-->

  </div>

  <!-- Nested tab content for "Transition" -->
  <div id="RadioButtonTransition" class="nested-tabcontent">
    <h4>Transition</h4>
    <!-- Content for the "Transition" tab goes here -->
  <div >
    <label >Outline:</label>
    <input type="text" name="Radio_Button_Transition_outline" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 155) : ''; ?>" ><br>
</div>

<div >
    <label >Opacity:</label>
    <input type="number" name="Radio_Button_Transition_opacity" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 156) : ''; ?>" ><br>
</div>

<div >
    <label >Cursor:</label>
    <input type="text" name="Radio_Button_Transition_cursor" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 154) : ''; ?>" ><br>
</div>

<!--<div >
    <label >Transition Duration:</label>
    <input type="number" name="Radio_Button_Transition_transition-duration" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 118) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Timing Function:</label>
    <select name="Radio_Button_Transition_transition-timing-function"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 115) : '';?>"  >
        <option value="linear">Linear</option>
        <option value="ease">Ease</option>
        <option value="ease-in">Ease In</option>
        <option value="ease-out">Ease Out</option>
        <option value="ease-in-out">Ease In Out</option>
    </select><br>
</div>

<div >
    <label >Resize:</label>
    <select name="Radio_Button_Transition_resize"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 115) : '';?>" >
        <option value="none">None</option>
        <option value="both">Both</option>
        <option value="horizontal">Horizontal</option>
        <option value="vertical">Vertical</option>
    </select><br>
</div>-->

  </div>
   <div>
        <button type="submit" name="save">Save </button><br>                
</div>
</div>
 
</div>
<?php $this->endWidget(); ?>

<div id="Check_Box" class="tabcontent">
  <h3>Check Box</h3>
  <!-- Content for the "Check Box" tab goes here -->
   <div id="checkBoxNestedTabContainer" style="display: block;">
  <div class="nested-tab">
    <button class="nested-tablinks" onclick="openNestedTab(event, 'CheckBoxSize')">Size</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'CheckBoxColor')">Color</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'CheckBoxFont')">Font</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'CheckBoxText')">Text</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'CheckBoxTransition')">Transition</button>
  </div><br>
    


<div id="CheckBoxSize" class="nested-tabcontent"><br>
    <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'tabview-form-id',
    'enableAjaxValidation' => false,
)); ?>
     
    <h4>Size</h4>
    <!-- Content for the "Size" tab goes here -->
    <div >
    <label >Height:</label>
    <input type="text" name="Check_BoxSize_height" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 128) : ''; ?>" > px<br>
</div>

<div >
    <label >Width:</label>
    <input type="text" name="Check_BoxSize_width" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 127) : ''; ?>" > px<br>
</div>
    <div >
    <label >Padding :</label>
    <input type="text" name="Check_BoxSize_padding" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 129) : ''; ?>" > px<br>
</div>
  <div >
    <label >Border:</label>
    <input type="text" name="Check_BoxSize_border" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 128) : ''; ?>" ><br>
</div>

<div >
    <label >Border Radius:</label>
    <input type="text" name="Check_BoxSize_border-radius" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 130) : ''; ?>" ><br>
</div>

<!--<div >
    <label >Box Size:</label>
    <input type="text" name="Check_BoxSize_box-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 118) : ''; ?>" ><br>
</div>-->

<div >
    <label >Position:</label>
    <select name="Check_BoxSize_position"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 136) : '';?>" >
        <option value="static">Static</option>
        <option value="relative">Relative</option>
        <option value="absolute">Absolute</option>
        <option value="fixed">Fixed</option>
        <option value="sticky">Sticky</option>
    </select><br>
</div>

<div >
    <label >Margin:</label>
    <input type="number" name="Check_BoxSize_margin" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 134) : ''; ?>" >px<br>
</div>

<div >
    <label >Display:</label>
    <select name="Check_BoxSize_display"   value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 135) : '';?>">
        <option value="block">Block</option>
        <option value="inline">Inline</option>
        <option value="inline-block">Inline Block</option>
        <option value="flex">Flex</option>
        <option value="grid">Grid</option>
    </select><br>
</div>

<div >
    <label >Clear:</label>
    <select name="Check_BoxSize_clear"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 139) : '';?>" >
        <option value="none">None</option>
        <option value="left">Left</option>
        <option value="right">Right</option>
        <option value="both">Both</option>
    </select><br>
</div>


  </div>
  
  <div id="CheckBoxColor" class="nested-tabcontent">
    <h4>Color</h4>
    <!-- Content for the "Color" tab goes here -->
    <div >
    <label >Font Color:</label>
    <input type="color" name="Check_Box_Color_font-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 138) : ''; ?>" ><br>
</div>

<!--<div >
    <label >Background Color:</label>
    <input type="color" name="Check_Box_Color_background-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 118) : ''; ?>" ><br>
</div>-->

<!--<div >
    <label >Border Color:</label>
    <input type="color" name="Check_Box_Color_border-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 118) : ''; ?>" ><br>
</div>-->
  </div>
    <div id="CheckBoxFont" class="nested-tabcontent">
    <h4>Font</h4>
    <!-- Content for the "Font" tab goes here -->
  <div >
    <label >Font Size:</label>
    <input type="number" name="Check_Box_Font_font-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 146) : ''; ?>" ><br>
</div>

<!--<div >
    <label >Font Weight:</label>
    <select name="Check_Box_Font_font-weight"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 115) : '';?>" >
        <option value="normal">Normal</option>
        <option value="bold">Bold</option>
        <option value="bolder">Bolder</option>
        <option value="lighter">Lighter</option>
    </select><br>
</div>-->

<!--<div >
    <label >Font Style:</label>
    <select name="Check_Box_Font_font-style"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 115) : '';?>">
        <option value="normal">Normal</option>
        <option value="italic">Italic</option>
        <option value="oblique">Oblique</option>
    </select><br>
</div>-->


  </div>

  <!-- Nested tab content for "Text" -->
  <div id="CheckBoxText" class="nested-tabcontent">
    <h4>Text</h4>
    <!-- Content for the "Text" tab goes here -->
    <div >
    <label >Text Align:</label>
    <select name="Check_Box_Text_text-align"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 137) : '';?>">
        <option value="left">Left</option>
        <option value="center">Center</option>
        <option value="right">Right</option>
        <option value="justify">Justify</option>
    </select><br>
</div>

<!--<div >
    <label >Text Decoration:</label>
    <select name="Check_Box_Text_text-decoration"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 115) : '';?>">
        <option value="none">None</option>
        <option value="underline">Underline</option>
        <option value="overline">Overline</option>
        <option value="line-through">Line-through</option>
    </select><br>
</div>-->

  </div>

  <!-- Nested tab content for "Transition" -->
  <div id="CheckBoxTransition" class="nested-tabcontent">
    <h4>Transition</h4>
    <!-- Content for the "Transition" tab goes here -->
  <div >
    <label >Box Shadow:</label>
    <input type="text" name="Check_Box_Transition_box-shadow" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 118) : ''; ?>" ><br>
</div>

<div >
    <label >Opacity:</label>
    <input type="number" name="Check_Box_Transition_opacity" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 118) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Property:</label>
    <input type="text" name="Check_Box_Transition_transition-property" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 118) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Duration:</label>
    <input type="number" name="Check_Box_Transition_transition-duration" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 118) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Timing Function:</label>
    <select name="Check_Box_Transition_transition-timing-function"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 115) : '';?>">
        <option value="linear">Linear</option>
        <option value="ease">Ease</option>
        <option value="ease-in">Ease In</option>
        <option value="ease-out">Ease Out</option>
        <option value="ease-in-out">Ease In Out</option>
    </select><br>
</div>

<div >
    <label >Resize:</label>
    <select name="Check_Box_Transition_resize"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 115) : '';?>">
        <option value="none">None</option>
        <option value="both">Both</option>
        <option value="horizontal">Horizontal</option>
        <option value="vertical">Vertical</option>
    </select><br>
</div>

  </div>
 
</div>
  <div>
        <button type="submit" name="save">Save </button><br>                
</div>
</div>
<?php $this->endWidget(); ?>

<div id="Button" class="tabcontent">
  <h3>Button</h3>
   <div id="ButtonNestedTabContainer" style="display: block;">
  <div class="nested-tab">
    <button class="nested-tablinks" onclick="openNestedTab(event, 'ButtonSize')">Size</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'ButtonColor')">Color</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'ButtonFont')">Font</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'ButtonText')">Text</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'ButtonTransition')">Transition</button>
  </div><br>
    


<div id="ButtonSize" class="nested-tabcontent"><br>
    <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'tabview-form-id',
    'enableAjaxValidation' => false,
)); ?>
     
    <h4>Size</h4>
    <!-- Content for the "Size" tab goes here -->
    <div >
    <label >Height:</label>
    <input type="text" name="ButtonSize_height" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 92) : ''; ?>" > px<br>
</div>

<div >
    <label >Width:</label>
    <input type="text" name="ButtonSize_width" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 76) : ''; ?>" > px<br>
</div>
    <div >
    <label >Padding:</label>
    <input type="text" name="ButtonSize_padding" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 77) : ''; ?>" > px<br>
</div>
  <div >
    <label >Border:</label>
    <input type="text" name="ButtonSize_border" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 78) : ''; ?>" ><br>
</div>

<div >
    <label >Border Radius:</label>
    <input type="text" name="ButtonSize_border-radius" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 79) : ''; ?>" ><br>
</div>

<div >
    <label >Box Size:</label>
    <input type="text" name="ButtonSize_box-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 80) : ''; ?>" ><br>
</div>

<div >
    <label >Position:</label>
    <select name="ButtonSize_position"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 91) : '';?>">
        <option value="static">Static</option>
        <option value="relative">Relative</option>
        <option value="absolute">Absolute</option>
        <option value="fixed">Fixed</option>
        <option value="sticky">Sticky</option>
    </select><br>
</div>

<div >
    <label >Margin:</label>
    <input type="number" name="ButtonSize_margin" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 84) : ''; ?>" >px<br>
</div>

<div >
    <label >Display:</label>
    <select name="ButtonSize_display"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 86) : '';?>">
        <option value="block">Block</option>
        <option value="inline">Inline</option>
        <option value="inline-block">Inline Block</option>
        <option value="flex">Flex</option>
        <option value="grid">Grid</option>
    </select><br>
</div>

<div >
    <label >Clear:</label>
    <select name="ButtonSize_clear"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 90) : '';?>">
        <option value="none">None</option>
        <option value="left">Left</option>
        <option value="right">Right</option>
        <option value="both">Both</option>
    </select><br>
</div>


  </div>
  
  <div id="ButtonColor" class="nested-tabcontent">
    <h4>Color</h4>
    <!-- Content for the "Color" tab goes here -->
    <div >
    <label >Font Color:</label>
    <input type="color" name="Button_Color_font-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 83) : ''; ?>" ><br>
</div>

<div >
    <label >Background Color:</label>
    <input type="color" name="Button_Color_background-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 82) : ''; ?>" ><br>
</div>

<div >
    <label >Border Color:</label>
    <input type="color" name="Button_Color_border-color" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 88) : ''; ?>" ><br>
</div>
  </div>
    <div id="ButtonFont" class="nested-tabcontent">
    <h4>Font</h4>
    <!-- Content for the "Font" tab goes here -->
  <div >
    <label >Font Size:</label>
    <input type="number" name="Button_Font_font-size" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 81) : ''; ?>" ><br>
</div>

<div >
    <label >Font Weight:</label>
    <select name="Button_Font_font-weight"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 85) : '';?>">
        <option value="normal">Normal</option>
        <option value="bold">Bold</option>
        <option value="bolder">Bolder</option>
        <option value="lighter">Lighter</option>
    </select><br>
</div>

<div >
    <label >Font Style:</label>
    <select name="Button_Font_font-style"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 87) : '';?>">
        <option value="normal">Normal</option>
        <option value="italic">Italic</option>
        <option value="oblique">Oblique</option>
    </select><br>
</div>


  </div>

  <!-- Nested tab content for "Text" -->
  <div id="ButtonText" class="nested-tabcontent">
    <h4>Text</h4>
    <!-- Content for the "Text" tab goes here -->
    <div >
    <label >Text Align:</label>
    <select name="Button_Text_text-align"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 89) : '';?>">
        <option value="left">Left</option>
        <option value="center">Center</option>
        <option value="right">Right</option>
        <option value="justify">Justify</option>
    </select><br>
</div>

<div >
    <label >Text Decoration:</label>
    <select name="Button_Text_text-decoration"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 93) : '';?>">
        <option value="none">None</option>
        <option value="underline">Underline</option>
        <option value="overline">Overline</option>
        <option value="line-through">Line-through</option>
    </select><br>
</div>

  </div>

  <!-- Nested tab content for "Transition" -->
  <div id="ButtonTransition" class="nested-tabcontent">
    <h4>Transition</h4>
    <!-- Content for the "Transition" tab goes here -->
  <div >
    <label >Box Shadow:</label>
    <input type="text" name="Button_Transition_box-shadow" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 94) : ''; ?>" ><br>
</div>

<div >
    <label >Opacity:</label>
    <input type="number" name="Button_Transition_opacity" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 95) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Property:</label>
    <input type="text" name="Button_Transition_transition-property" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 96) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Duration:</label>
    <input type="number" name="Button_Transition_transition-duration" value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 97) : ''; ?>" ><br>
</div>

<div >
    <label >Transition Timing Function:</label>
    <select name="Button_Transition_transition-timing-function"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 98) : '';?>">
        <option value="linear">Linear</option>
        <option value="ease">Ease</option>
        <option value="ease-in">Ease In</option>
        <option value="ease-out">Ease Out</option>
        <option value="ease-in-out">Ease In Out</option>
    </select><br>
</div>

<div >
    <label >Resize:</label>
    <select name="Button_Transition_resize"  value="<?php echo isset($elementModels) && is_array($elementModels) ? getValueByPropertyId($elementModels, 99) : '';?>">
        <option value="none">None</option>
        <option value="both">Both</option>
        <option value="horizontal">Horizontal</option>
        <option value="vertical">Vertical</option>
    </select><br>
</div>
     </div>
 </div>
  <div>
        <button type="submit" name="save">Save </button><br>                
</div>
  </div>
   
<?php $this->endWidget(); ?>






<?php $this->endWidget(); ?>


 <script>
  function openCss(evt, tabName) {
    // Hide all tab contents
    var tabContents = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabContents.length; i++) {
      tabContents[i].style.display = "none";
    }

    // Remove "active" class from all tab buttons
    var tabLinks = document.getElementsByClassName("tablinks");
    for (var i = 0; i < tabLinks.length; i++) {
      tabLinks[i].className = tabLinks[i].className.replace(" active", "");
    }

    // Show the selected tab content
    document.getElementById(tabName).style.display = "block";

    // Add the "active" class to the clicked button
    evt.currentTarget.className += " active";

    // Show or hide the nested tab view based on the selected tab
    var nestedTabContainer = document.getElementById("nestedTabContainer");
    if (
      tabName === "Form" ||
      tabName === "Input" ||
      tabName === "Label" ||
      tabName === "Select_Input" ||
      tabName === "Radio_Button" ||
      tabName === "Check_Box" ||
      tabName === "Button"
    ) {
      nestedTabContainer.style.display = "block";
    } else {
      nestedTabContainer.style.display = "none";
    }
  }

  // Rest of the code remains the same

  window.addEventListener("DOMContentLoaded", function () {
    openTab(event, "Form");
  });

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

  function openNestedTab(evt, nestedTabName) {
    // Declare variables
    var i, nestedTabcontent, nestedTablinks;

    // Get all elements with class="nested-tabcontent" and hide them
    nestedTabcontent = document.getElementsByClassName("nested-tabcontent");
    for (i = 0; i < nestedTabcontent.length; i++) {
      nestedTabcontent[i].style.display = "none";
    }

    // Get all elements with class="nested-tablinks" and remove the class "active"
    nestedTablinks = document.getElementsByClassName("nested-tablinks");
    for (i = 0; i < nestedTablinks.length; i++) {
      nestedTablinks[i].className = nestedTablinks[i].className.replace(
        " active",
        ""
      );
    }

    // Show the current nested tab and add an "active" class to the button that opened the nested tab
    document.getElementById(nestedTabName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Trigger click event on the "Size" button to open it by default
  document.querySelector(".nested-tablinks").click();
</script>
     
