<?php
/* @var $this SessionsController */
/* @var $data Sessions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSession')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSession), array('view', 'id'=>$data->idSession)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('sessionName')); ?>:</b>
	<?php echo CHtml::encode($data->sessionName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SystemUsers_idSystemUser')); ?>:</b>
	<?php echo CHtml::encode($data->systemUsersIdSystemUser->username . ' ('.$data->systemUsersIdSystemUser->firstname. ' '. $data->systemUsersIdSystemUser->lastname.')'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Patients_idPatients')); ?>:</b>
	<?php echo CHtml::encode($data->patientsIdPatients->md5hash); ?>
	<br />
</div>