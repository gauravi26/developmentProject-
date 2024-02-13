    <!-- reportThemeTab.php -->
    <style>/* Custom Styles */

      .span-19  h1{
            
            text-align: center;
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


        .tabcontent {
      padding: 20px;
      border: 1px solid #ccc;
      margin-top: 10px;
      box-sizing: border-box;
      width: 600px
    }
    .tab {
        margin-bottom: 20px;
      }
      label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;    
        padding: 8px; /* Add padding to the right of the label */

    }

    .tabcontent label {
        display: inline-block;
        width: 150px;
        text-align: right;
/*        margin-right: 10px;*/
    }
 
    .star{
        
        color: red;
    }
    
    .span-19 {
        width: 1500px;
    }
    #page {
        width: 1500px
    }

    #reportThemeForm{
        
        width: 600px;
    }
      
/*       th { background-color: #102b47 ; }*/
      
      .previewDiv {
        position: fixed;
        right: 20px; /* Adjust the right distance as needed */
        bottom: -50px;
        margin-top : -333px
/*        height: 300px*/
    }
    
    form input[type="text"]{
        
        height: 25px;
/*        background-color: red;*/
    }
    </style>
  
    <?php
    /* @var $themeReportModel ThemeForReport */
    $this->pageTitle = 'Report Theme: ' . CHtml::encode($themeReportModel->theme_name);
    ?>
    <h1> Create Theme For Report</h1>

    <h3>Theme Name : <?php echo CHtml::encode($themeReportModel->theme_name); ?></h3>
    
<form id="reportThemeForm" method="post" action="<?php echo Yii::app()->createUrl('themeForReport/saveThemeValues'); ?>">
    <input type="hidden" name="themeReportId" value="<?php echo $themeReportModel->reference_id; ?>">


    <div class="tab">
      <button class="tablinks" onclick="openCss(event, 'GridContainer')">GridContainer</button>
      <button class="tablinks" onclick="openCss(event, 'Heading')">Heading</button>
      <button class="tablinks" onclick="openCss(event, 'Table')">Table</button>
      <button class="tablinks" onclick="openCss(event, 'TableHeader')">TableHeader</button>
      <button class="tablinks" onclick="openCss(event, 'TableRows')">TableRows</button>
      <button class="tablinks" onclick="openCss(event, 'TableCells')">TableCells</button>
      <button class="tablinks" onclick="openCss(event, 'TableFooter')">TableFooter</button>
      <button class="tablinks" onclick="openCss(event, 'DataTable')">DataTable</button>

    </div>
    <?php
$elementTabMapping = [
    60 => 'GridContainer',
    115 => 'Heading',
    61 => 'Table',
    53 => 'TableHeader',
    55  => 'TableRows',
    56 => 'TableRows',
    57=> 'TableRows',
    116 => 'TableCells',
    58 => 'TableFooter',
    117 =>'DataTable',
    118 =>'DataTable',
    119 =>'DataTable',
    120 =>'DataTable',
    
    // Add more mappings as needed
];

$requiredName = ['60_1','115_2','115_3','61_1','61_41','61_39','53_3','53_18','57_1','116_3','58_1','58_3'];
?>
 <!-- Create an associative array to group input fields based on tab IDs -->
<?php
$inputFieldsByTab = [];

foreach ($associatedSets as $set) {
    $elementTable = Elements::model()->findByPk(['id' => $set->element_id]);
    $element = $elementTable->element;
    $elementName = $elementTable->element_name;


    $cssPropertyTable = CssProperties::model()->findByPk(['id' => $set->css_property_id]);
    $cssProperty = $cssPropertyTable->property_name;

    $fieldName = $set->element_id . '_' . $set->css_property_id;
    $labelName =  $elementName . " ".$cssProperty;
    $inputName = $fieldName; 
    $inputId = $element . '_' . $cssProperty;
    // Check if the element has a corresponding tab ID
    $tabId = isset($elementTabMapping[$set->element_id]) ? $elementTabMapping[$set->element_id] : 'default';

    // Group input fields by tab ID
    $inputFieldsByTab[$tabId][] = [
        'label' => $labelName,
        'inputName' => $inputName,
        'value' => $set->value,
        'id' => $inputId,
    ];
}
?>

<!-- Render tabs and associated input fields -->
<!-- Content for the tab goes here -->
<?php foreach ($inputFieldsByTab as $tabId => $inputFields): ?>
    <div id="<?php echo $tabId; ?>" class="tabcontent">
        <h3><?php echo ucfirst($tabId); ?></h3>
        <!-- Check if input fields are set for this tab -->
        <?php if(isset($inputFields)): ?>
            <?php foreach ($inputFields as $inputField): ?>
                <div>
                    <label for="<?php echo $inputField['inputName']; ?>">
                        <?php echo ucfirst($inputField['label']); ?>
                    </label>

                    
                         <?php if ($inputField['inputName'] === '60_35'): // Check if the input field corresponds to '60_35' ?>
                        <!-- Include a dropdown for justify-content -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                            <option value=" ">Select</option>
                            <option value="right">Right</option>
                            <option value="left">Left</option>
                            <option value="center">Center</option>
                            <option value="justify">Justified</option>
                        </select>
                        <?php elseif ($inputField['inputName'] === '60_32'): // Check if the input field corresponds to '60_35' ?>
                        <!-- Include a dropdown for justify-content -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                            <option value=" ">Select</option>
                            <option value="display">Display</option>
                            <option value="centered">Center</option>
                           
                        </select>
                        <?php elseif ($inputField['inputName'] === '60_33'): // Check if the input field corresponds to another input name ?>
                        <!-- Include a dropdown for another property -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                            <option value=" ">Select</option>
                            <option value="repeat(3, 1fr)">Repeat(3, 1fr)</option> 
                            <option value="100px 200px 100px">100px 200px 100px</option>
                             <option value="1fr 2fr 1fr">1fr 2fr 1fr</option>
                        </select>
                          <?php elseif ($inputField['inputName'] === '60_36'): // Check if the input field corresponds to '60_35' ?>
                        <!-- Include a dropdown for justify-content -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                           <option value=" ">Select</option>
                            <option value="right">Right</option>
                            <option value="left">Left</option>
                            <option value="center">Center</option>
                            <option value="justify">Justified</option>
                           
                        </select>
                              <?php elseif ($inputField['inputName'] === '60_37'): // Check if the input field corresponds to '60_35' ?>
                        <!-- Include a dropdown for justify-content -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                    <option value="Roboto, 'sans-serif'">Roboto</option>
                    <option value="Arial, 'sans-serif'">Arial</option>
                    <option value="'Times New Roman', serif">Times New Roman</option>
                    <option value="Georgia, serif">Georgia</option>
                    <option value="Lato, 'sans-serif'">Lato</option>
                    <option value="'Open Sans', 'sans-serif'">Open Sans</option>
                    <option value="'Montserrat', 'sans-serif'">Montserrat</option>
                    <option value="'Merriweather', serif">Merriweather</option>
                           
                        </select>
                        
                            <?php elseif ($inputField['inputName'] === '115_38'): // Check if the input field corresponds to another input name ?>
                        <!-- Include a dropdown for another property -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                           <option value=" ">Select</option>
                            <option value="auto">Auto</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="span 3">Span 3</option>
                            <option value="start">Start</option>
                            <option value="end">End</option>
                        </select>
                           <?php elseif ($inputField['inputName'] === '115_12'): // Check if the input field corresponds to another input name ?>
                        <!-- Include a dropdown for another property -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                           <option value=" ">Select</option>
                            <option value="right"> Right</option>
                            <option value="left"> Left</option>
                            <option value="center"> Center</option>
                        </select>
                            <?php elseif ($inputField['inputName'] === '61_39'): // Check if the input field corresponds to another input name ?>
                        <!-- Include a dropdown for another property -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                           <option value=" ">Select</option>
                           <option value="separate">Separate</option>
                           <option value="collapse">Collapse</option>
                        </select>
                          <?php elseif ($inputField['inputName'] === '61_40'): // Check if the input field corresponds to another input name ?>
                        <!-- Include a dropdown for another property -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                           <option value=" ">Select</option>
                            <option value="1px">1px Border</option>
                            <option value="2px">2px Border</option>
                            <option value="3px">3px Border</option>
                            <option value="1px 0">Borders Only Between Rows</option>
                            <option value="0 1px">Borders Only Between Columns</option>
                            <option value="1px 1px">Borders Between Rows and Columns</option>
                        </select>
                           <?php elseif ($inputField['inputName'] === '61_41'): // Check if the input field corresponds to another input name ?>
                        <!-- Include a dropdown for another property -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                           <option value=" ">Select</option>
                             <option value="5px">5px</option>
                             <option value="10px">10px</option>
                             <option value="15px">15px</option>
                        </select>
                        <?php elseif ($inputField['inputName'] === '53_4'): // Check if the input field corresponds to another input name ?>
                        <!-- Include a dropdown for another property -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                           <option value=" ">Select</option>
                           <option value="1px solid black">1px Solid Black</option>
                            <option value="2px solid black">2px Solid Black</option>
                            <option value="1px solid grey">1px Solid Grey</option>
                            <option value="2px solid grey">2px Solid Grey</option>
                            <option value="1px solid #6495ED">1px Solid Blue</option>
                            <option value="2px solid #6495ED">2px Solid Blue</option>
                        </select>
                          <?php elseif ($inputField['inputName'] === '53_18'): // Check if the input field corresponds to another input name ?>
                        <!-- Include a dropdown for another property -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                           <option value=" ">Select</option>
                         <option value="bold">Bold</option>
                         <option value="bolder">Bolder</option>
                         <option value="lighter">Lighter</option>
                        </select>
                        
                         <?php elseif ($inputField['inputName'] === '116_4'): // Check if the input field corresponds to '60_35' ?>
                        <!-- Include a dropdown for justify-content -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                                          <option value=" ">Select</option>
                            <option value="1px solid black">1px Solid Black</option>
                            <option value="1px solid #808080">1px Solid Gray</option>
                            <option value="1px solid #6495ED">1px Solid Blue</option>
                            <option value="1px dashed black">1px Dashed Black</option>
                            <option value="1px dashed #808080">1px Dashed Gray</option>
                            <option value="1px dashed #6495ED">1px Dashed Blue</option>
                            <option value="1px dotted black">1px Dotted Black</option>
                            <option value="1px dotted #808080">1px Dotted Gray</option>
                            <option value="1px dotted #6495ED">1px Dotted Blue</option>

                           
                        </select>
                        
                        <?php elseif ($inputField['inputName'] === '116_37'): // Check if the input field corresponds to '60_35' ?>
                        <!-- Include a dropdown for justify-content -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                       <option value=" ">Select</option>
                       <option value="Roboto, 'sans-serif'">Roboto</option>
                       <option value="Arial, 'sans-serif'">Arial</option>
                       <option value="'Times New Roman', serif">Times New Roman</option>
                       <option value="Georgia, serif">Georgia</option>
                       <option value="Lato, 'sans-serif'">Lato</option>
                       <option value="'Open Sans', 'sans-serif'">Open Sans</option>
                       <option value="'Montserrat', 'sans-serif'">Montserrat</option>
                       <option value="'Merriweather', serif">Merriweather</option>
                           
                        </select>
                         <?php elseif ($inputField['inputName'] === '116_23'): // Check if the input field corresponds to '60_35' ?>
                        <!-- Include a dropdown for justify-content -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                       <option value=" ">Select</option>
                       <option value="normal">Normal</option>
                       <option value="italic">Italic</option>
                       <option value="oblique">Oblique</option>

                        </select>
                        
                             <?php elseif ($inputField['inputName'] === '117_18'): // Check if the input field corresponds to '60_35' ?>
                        <!-- Include a dropdown for justify-content -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                       <option value=" ">Select</option>
                       <option value="bold">Bold</option>
                        <option value="bolder">Bolder</option>
                        <option value="lighter">Lighter</option>

                        </select>
                        
                          <?php elseif ($inputField['inputName'] === '118_18'): // Check if the input field corresponds to '60_35' ?>
                        <!-- Include a dropdown for justify-content -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                       <option value=" ">Select</option>
                       <option value="bold">Bold</option>
                        <option value="bolder">Bolder</option>
                        <option value="lighter">Lighter</option>

                        </select>
                         <?php elseif ($inputField['inputName'] === '119_18'): // Check if the input field corresponds to '60_35' ?>
                        <!-- Include a dropdown for justify-content -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                       <option value=" ">Select</option>
                       <option value="bold">Bold</option>
                        <option value="bolder">Bolder</option>
                        <option value="lighter">Lighter</option>

                        </select>
                           <?php elseif ($inputField['inputName'] === '120_18'): // Check if the input field corresponds to '60_35' ?>
                        <!-- Include a dropdown for justify-content -->
                        <select name="<?php echo $inputField['inputName']; ?>" class="container-property-input" id="<?php echo $inputField['id']; ?>">
                       <option value=" ">Select</option>
                       <option value="bold">Bold</option>
                        <option value="bolder">Bolder</option>
                        <option value="lighter">Lighter</option>

                        </select>
                    <?php elseif (strpos($inputField['label'], 'color') !== false): ?>
                        <!-- Include a color picker for properties containing the word "color" -->
                        <input type="color" 
                               name="<?php echo $inputField['inputName']; ?>" 
                               value="<?php echo $inputField['value']; ?>" 
                               class="container-property-input"
                               id="<?php echo $inputField['id']; ?>"
                               <?php if (in_array($inputField['inputName'], $requiredName) && empty($inputField['value'])): ?>
                                   required
                               <?php endif; ?>
                        >
                        
                 <?php else: ?>
    <!-- Keep the existing text input for other fields -->
    <input type="text" 
           name="<?php echo $inputField['inputName']; ?>" 
           value="<?php echo !empty($inputField['value']) ? $inputField['value'] . '' : 'px'; ?>" 
           class="container-property-input"
           id="<?php echo $inputField['id']; ?>"
           <?php if (in_array($inputField['inputName'], $requiredName) && empty($inputField['value'])): ?>
               required
           <?php endif; ?>
    >
<?php endif; ?>


                    <span class='star'>
                        <?php echo (in_array($inputField['inputName'], $requiredName) && empty($inputField['value'])) ? '*' : ''; ?>
                    </span>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<?php endforeach; ?>

    
<br><input type="submit" value="Save" name ="saveTheme">
</form>
    
    <!--INCLUDING PREVIEW PAGE -->
    <div class="previewDiv">
<?php
include 'preview.php'; 
?>
    </div>
<!--Script for preview -->
<script src="http://localhost/report/AjaxFiles/reportPreview.js"></script>
<script src="http://localhost/report/AjaxFiles/tabView.js"></script>







