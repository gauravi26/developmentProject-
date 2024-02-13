<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'themes-form',
    'enableAjaxValidation'=>false,
)); ?>

<?php if($model->current_tab == 'box-model'): ?>

    <!-- Box Model tab -->
    <div class="form-group">
        <?php echo $form->labelEx($model, 'box_model'); ?>
        <?php echo $form->textField($model, 'box_model', array('class'=>'form-control')); ?>
        <?php echo $form->error($model, 'box_model'); ?>
    </div>

    <!-- Next button -->
    <div class="form-group">
        <?php echo CHtml::submitButton('Next', array('name'=>'next', 'class'=>'btn btn-primary')); ?>
    </div>

<?php elseif($model->current_tab == 'background'): ?>

    <!-- Background tab -->
    <div class="form-group">
        <?php echo $form->labelEx($model, 'background_image'); ?>
        <?php echo $form->textField($model, 'background_image', array('class'=>'form-control')); ?>
        <?php echo $form->error($model, 'background_image'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'background_color'); ?>
        <?php echo $form->textField($model, 'background_color', array('class'=>'form-control', 'id' => 'color-picker')); ?>
        <?php echo $form->error($model, 'background_color'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'background_repeat'); ?>
        <?php echo $form->textField($model, 'background_repeat', array('class'=>'form-control')); ?>
        <?php echo $form->error($model, 'background_repeat'); ?>
    </div>

    <!-- Next button -->
    <div class="form-group">
        <?php echo CHtml::submitButton('Next', array('name'=>'next', 'class'=>'btn btn-primary')); ?>
    </div>

<?php elseif($model->current_tab == 'finish'): ?>

    <!-- Finish tab -->
    <div class="form-group">
        <?php echo CHtml::submitButton('Save', array('name'=>'save', 'class'=>'btn btn-primary')); ?>
    </div>

<?php endif; ?>

<?php $this->endWidget(); ?>
