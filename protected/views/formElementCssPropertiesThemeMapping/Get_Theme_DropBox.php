<?php
$this->beginWidget('CActiveForm', array(
    'id' => 'tab-form-id',
    'enableAjaxValidation' => false,
    // other form options
));
?>
<!-- Theme ID dropdown using Formthememapping model -->
<div>
    <?php echo $form->labelEx($elementModel, 'theme_ID'); ?>
    <?php
    $Form_Element_Css_Property = FormThemeMapping::model()->with('theme')->findAll(array('order' => 'theme_ID'));
    $themeList = CHtml::listData($Form_Element_Css_Property, 'theme_ID', 'theme.theme_name');
    $themeList = array('' => 'Select Theme') + $themeList; // Add the 'Select Theme' option at the beginning of the array
    echo $form->dropDownList($elementModel, 'theme_ID', $themeList, array(
        'onchange' => 'updateElement(this.value)',
    ));
    ?>
    <?php echo $form->error($elementModel, 'theme_ID'); ?>
</div>
<?php $this->endWidget(); ?>

<script>
    function updateElement(themeID) {
        if (themeID) {
            // Construct the URL with the updated themeId
            var url = '<?php echo $this->createUrl('FormElementCssPropertiesThemeMapping/elementCssCustomUpdate', array('themeId' => 'themeIdPlaceholder')) ?>';
            url = url.replace('themeIdPlaceholder', themeID);
            
            // Redirect to the updated URL
            window.location.href = url;
        }
    }
</script>
