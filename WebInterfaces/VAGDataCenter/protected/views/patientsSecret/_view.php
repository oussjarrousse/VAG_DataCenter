<?php
/* @var $this PatientsSecretController */
/* @var $data PatientsSecret */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPatientsSecret')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPatientsSecret), array('view', 'id'=>$data->idPatientsSecret)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthdate')); ?>:</b>
	<?php echo CHtml::encode($data->birthdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('md5')); ?>:</b>
	<?php echo CHtml::encode($data->md5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />


</div>