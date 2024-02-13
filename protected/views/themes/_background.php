<!-- _background.php -->

<div class="row">
    <?php echo CHtml::activeLabelEx($model, 'background_image'); ?>
    <?php echo CHtml::activeTextField($model, 'background_image', array('size' => 60, 'maxlength' => 255)); ?>
    <?php echo CHtml::error($model, 'background_image'); ?>
</div><br>
<div class="row">
    <?php echo CHtml::activeLabelEx($model, 'background_color'); ?>
    <?php echo CHtml::activeTextField($model, 'background_color', array('size' => 60, 'maxlength' => 255, 'id' => 'color-picker')); ?>
    <?php echo CHtml::error($model, 'background_color'); ?>
</div><br>
<div class="row">
    <?php echo CHtml::activeLabelEx($model, 'background_repeat'); ?>
    <?php echo CHtml::activeDropDownList($model, 'background_repeat', 
        array(
            'repeat' => 'Repeat',
            'no-repeat' => 'No Repeat', 
            'repeat-x' => 'Repeat Horizontally', 
            'repeat-y' => 'Repeat Vertically'
        ), 
        array('empty' => 'Select Background Repeat')
    ); ?>
    <?php echo CHtml::error($model, 'background_repeat'); ?>
</div><br>
<div class="row">
    <?php echo CHtml::activeLabelEx($model, 'background_position'); ?>
    <?php echo CHtml::activeDropDownList($model, 'background_position', 
        array(
            'top left' => 'Top Left', 
            'top center' => 'Top Center', 
            'top right' => 'Top Right', 
            'center left' => 'Center Left', 
            'center center' => 'Center Center', 
            'center right' => 'Center Right', 
            'bottom left' => 'Bottom Left', 
            'bottom center' => 'Bottom Center', 
            'bottom right' => 'Bottom Right'
        ), 
        array('empty' => 'Select Background Position')
    ); ?>
    <?php echo CHtml::error($model, 'background_position'); ?>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2@2.3.1/dist/spectrum.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2@2.3.1/dist/spectrum.min.js"></script>

<script>
    $(document).ready(function() {
        $("#color-picker").spectrum({
            preferredFormat: "hex",
            showInput: true,
            showPalette: true,
            palette: [
                ['#000', '#444', '#666', '#999', '#ccc', '#eee', '#f3f3f3', '#fff'],
                ['#f00', '#f90', '#ff0', '#0f0', '#0ff', '#00f', '#90f', '#f0f']
            ]
        });
    });
</script>



