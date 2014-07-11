<?php
/* @var $this PatientsController */
/* @var $data Patients */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPatients')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPatients), array('view', 'id'=>$data->idPatients)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('md5hash')); ?>:</b>
	<?php echo CHtml::encode($data->md5hash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthdate')); ?>:</b>
	<?php echo CHtml::encode($data->birthdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />


</div>