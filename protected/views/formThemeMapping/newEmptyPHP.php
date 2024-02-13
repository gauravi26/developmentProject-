 <div id="checkBoxNestedTabContainer" style="display: block;">
  <div class="nested-tab">
    <button class="nested-tablinks" onclick="openNestedTab(event, 'RadioButtonSize')">Size</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'RadioButtonColor')">Color</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'RadioButtonFont')">Font</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'RadioButtonText')">Text</button>
    <button class="nested-tablinks" onclick="openNestedTab(event, 'RadioButtonTransition')">Transition</button>
  </div><br>
    


<div id="RadioButtonSize" class="nested-tabcontent"><br>
     
    <h4>Size</h4>
    <!-- Content for the "Size" tab goes here -->
    <div >
    <label >Height:</label>
    <input type="text" name="Check_BoxSize[height]" value="<?php echo $elementModel->value; ?>" > px<br>
</div>

<div >
    <label >Width:</label>
    <input type="text" name="Check_BoxSize[width]" value="<?php echo $elementModel->value; ?>" > px<br>
</div>
  <div >
    <label >Border:</label>
    <input type="text" name="Check_BoxSize[border]" value="<?php echo $elementModel->value; ?>" ><br>
</div>

<div >
    <label >Border Radius:</label>
    <input type="text" name="Check_BoxSize[border-radius]" value="<?php echo $elementModel->value; ?>" ><br>
</div>

<div >
    <label >Box Size:</label>
    <input type="text" name="Check_BoxSize[box-size]" value="<?php echo $elementModel->value; ?>" ><br>
</div>

<div >
    <label >Position:</label>
    <select name="Check_BoxSize[position]" >
        <option value="static">Static</option>
        <option value="relative">Relative</option>
        <option value="absolute">Absolute</option>
        <option value="fixed">Fixed</option>
        <option value="sticky">Sticky</option>
    </select><br>
</div>

<div >
    <label >Margin:</label>
    <input type="number" name="Check_BoxSize[margin]" value="<?php echo $elementModel->value; ?>" >px<br>
</div>

<div >
    <label >Display:</label>
    <select name="Check_BoxSize[display]" >
        <option value="block">Block</option>
        <option value="inline">Inline</option>
        <option value="inline-block">Inline Block</option>
        <option value="flex">Flex</option>
        <option value="grid">Grid</option>
    </select><br>
</div>

<div >
    <label >Clear:</label>
    <select name="Check_BoxSize[clear]" >
        <option value="none">None</option>
        <option value="left">Left</option>
        <option value="right">Right</option>
        <option value="both">Both</option>
    </select><br>
</div>


  </div>
  
  <div id="RadioButtonColor" class="nested-tabcontent">
    <h4>Color</h4>
    <!-- Content for the "Color" tab goes here -->
    <div >
    <label >Font Color:</label>
    <input type="color" name="Check_Box_Color[font-color]" value="<?php echo $elementModel->value; ?>" ><br>
</div>

<div >
    <label >Background Color:</label>
    <input type="color" name="Check_Box_Color[background-color]" value="<?php echo $elementModel->value; ?>" ><br>
</div>

<div >
    <label >Border Color:</label>
    <input type="color" name="Check_Box_Color[border-color]" value="<?php echo $elementModel->value; ?>" ><br>
</div>
  </div>
    <div id="RadioButtonFont" class="nested-tabcontent">
    <h4>Font</h4>
    <!-- Content for the "Font" tab goes here -->
  <div >
    <label >Font Size:</label>
    <input type="number" name="Check_Box_Font[font-size]" value="<?php echo $elementModel->value; ?>" ><br>
</div>

<div >
    <label >Font Weight:</label>
    <select name="Check_Box_Font[font-weight]" >
        <option value="normal">Normal</option>
        <option value="bold">Bold</option>
        <option value="bolder">Bolder</option>
        <option value="lighter">Lighter</option>
    </select><br>
</div>

<div >
    <label >Font Style:</label>
    <select name="Check_Box_Font[font-style]" >
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
    <select name="Check_Box_Text[text-align]" >
        <option value="left">Left</option>
        <option value="center">Center</option>
        <option value="right">Right</option>
        <option value="justify">Justify</option>
    </select><br>
</div>

<div >
    <label >Text Decoration:</label>
    <select name="Check_Box_Text[text-decoration]" >
        <option value="none">None</option>
        <option value="underline">Underline</option>
        <option value="overline">Overline</option>
        <option value="line-through">Line-through</option>
    </select><br>
</div>

  </div>

  <!-- Nested tab content for "Transition" -->
  <div id="RadioButtonTransition" class="nested-tabcontent">
    <h4>Transition</h4>
    <!-- Content for the "Transition" tab goes here -->
  <div >
    <label >Box Shadow:</label>
    <input type="text" name="Check_Box_Transition[box-shadow]" value="<?php echo $elementModel->value; ?>" ><br>
</div>

<div >
    <label >Opacity:</label>
    <input type="number" name="Check_Box_Transition[opacity]" value="<?php echo $elementModel->value; ?>" ><br>
</div>

<div >
    <label >Transition Property:</label>
    <input type="text" name="Check_Box_Transition[transition-property]" value="<?php echo $elementModel->value; ?>" ><br>
</div>

<div >
    <label >Transition Duration:</label>
    <input type="number" name="Check_Box_Transition[transition-duration]" value="<?php echo $elementModel->value; ?>" ><br>
</div>

<div >
    <label >Transition Timing Function:</label>
    <select name="Check_Box_Transition[transition-timing-function]" >
        <option value="linear">Linear</option>
        <option value="ease">Ease</option>
        <option value="ease-in">Ease In</option>
        <option value="ease-out">Ease Out</option>
        <option value="ease-in-out">Ease In Out</option>
    </select><br>
</div>

<div >
    <label >Resize:</label>
    <select name="Check_Box_Transition[resize]" >
        <option value="none">None</option>
        <option value="both">Both</option>
        <option value="horizontal">Horizontal</option>
        <option value="vertical">Vertical</option>
    </select><br>
</div>

  </div>
  
</div>