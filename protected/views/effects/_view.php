<?php
/* @var $this EffectsController */
/* @var $data Effects */

// Assuming $data->form_id is the ID of the form associated with the effect
$formModel = Forms::model()->findByPk($data->form_id);
$triggerModel = EffectTrigger::model()->findByPk($data->trigger_id);
$fieldModel = FormFields::model()->findByPk($data->FIELD_ID);
$effectModel = ScriptCode::model()->findByPk($data->effect_code_id);

?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('form_id')); ?>:</b>
    <?php echo isset($formModel->FORM_NAME) ? CHtml::encode($formModel->FORM_NAME) : 'N/A'; ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('trigger_id')); ?>:</b>
    <?php echo isset($triggerModel->effect_trigger) ? CHtml::encode($triggerModel->effect_trigger) : 'N/A'; ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('FIELD_ID')); ?>:</b>
    <?php echo isset($fieldModel->TITLE) ? CHtml::encode($fieldModel->TITLE) : 'N/A'; ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('effect_code_id')); ?>:</b>
    <?php echo isset($effectModel->effects) ? CHtml::encode($effectModel->effects) : 'N/A'; ?>
    <br />

</div>
