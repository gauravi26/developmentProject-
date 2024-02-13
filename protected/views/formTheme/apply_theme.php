<?php
$form = $this->beginWidget('CActiveForm', [
    'id' => 'apply-theme-form',
    'enableAjaxValidation' => false,
]);
?>

<?php echo $form->errorSummary($model); ?>

<div class="row">
    <?php echo $form->labelEx($model, 'themeId'); ?>
    <?php echo $form->dropDownList($model, 'themeId', $themes, ['prompt' => 'Select a theme']); ?>
    <?php echo $form->error($model, 'themeId'); ?>
</div>

<div class="row buttons">
    <?php echo CHtml::submitButton('Apply Theme'); ?>
</div>

<?php $this->endWidget(); ?>
