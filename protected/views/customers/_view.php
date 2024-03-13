<?php
/* @var $this CustomersController */
/* @var $data Customers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CustomerID), array('view', 'id'=>$data->CustomerID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FirstName')); ?>:</b>
	<?php echo CHtml::encode($data->FirstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastName')); ?>:</b>
	<?php echo CHtml::encode($data->LastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PhoneNumber')); ?>:</b>
	<?php echo CHtml::encode($data->PhoneNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RegistrationDate')); ?>:</b>
	<?php echo CHtml::encode($data->RegistrationDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PremiumMember')); ?>:</b>
	<?php echo CHtml::encode($data->PremiumMember); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Balance')); ?>:</b>
	<?php echo CHtml::encode($data->Balance); ?>
	<br />

	*/ ?>

</div>