 
<script>
    $('#_box_model-button').click(function() {
    // Handle the Save button click event here
});




 </script>   

<table>
    <tr>
        <td><?php echo CHtml::activeLabelEx($model, 'margin_top', []); ?></td>
        <td><?php echo CHtml::activeTextField($model,'margin_top', array('size' => 60, 'maxlength' => 255, 'class' => 'numeric-input')); ?>px</td>
        <td><?php echo CHtml::error($model, 'margin_top'); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabelEx($model, 'padding', []); ?></td>
        <td><?php echo CHtml::activeTextField($model, 'padding', array('size' => 60, 'maxlength' => 255, 'class' => 'numeric-input')); ?>px</td>
        <td><?php echo CHtml::error($model, 'padding'); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabelEx($model, 'height', []); ?></td>
        <td><?php echo CHtml::activeTextField($model, 'height', array('size' => 60, 'maxlength' => 255, 'class' => 'numeric-input')); ?>px</td>
        <td><?php echo CHtml::error($model, 'height'); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabelEx($model, 'width', []); ?></td>
        <td><?php echo CHtml::activeTextField($model, 'width', array('size' => 60, 'maxlength' => 255, 'class' => 'numeric-input')); ?>px</td>
        <td><?php echo CHtml::error($model, 'width'); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabelEx($model, 'max_height', []); ?></td>
        <td><?php echo CHtml::activeTextField($model, 'max_height', array('size' => 60, 'maxlength' => 255, 'class' => 'numeric-input')); ?>px</td>
        <td><?php echo CHtml::error($model, 'max_height'); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabelEx($model, 'max_width', []); ?></td>
        <td><?php echo CHtml::activeTextField($model, 'max_width', array('size' => 60, 'maxlength' => 255, 'class' => 'numeric-input')); ?>px</td>
        <td><?php echo CHtml::error($model, 'max_width'); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabelEx($model, 'min_height', []); ?></td>
        <td><?php echo CHtml::activeTextField($model, 'min_height', array('size' => 60, 'maxlength' => 255, 'class' => 'numeric-input')); ?>px</td>
        <td><?php echo CHtml::error($model, 'min_height'); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabelEx($model, 'min_width', []); ?></td>
        <td><?php echo CHtml::activeTextField($model, 'min_width', array('size' => 60, 'maxlength' => 255, 'class' => 'numeric-input')); ?>px</td>
        <td><?php echo CHtml::error($model, 'min_width'); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabelEx($model, 'box_sizing', []); ?></td>
        <td><?php echo CHtml::activeDropDownList($model, 'box_sizing', array('content-box'=>'content-box', 'border-box'=>'border-box')); ?></td>
        <td><?php echo CHtml::error($model, 'box_sizing'); ?></td>
    </tr>



<div class="container">
    <table>
        <!-- table content here -->
    </table>
    <div class="form-actions">
        <?php echo CHtml::submitButton('Save', array('id' => '_box_model-button', 'name'=> 'Box_Model_Save_Button')); ?>
    </div>
</div>



<script>
    $(document).ready(function() {
        // Allow only numeric data in input fields with class 'numeric-input'
        $('.numeric-input').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
</script>
