<?php
/* @var $this DiagnosisController */
/* @var $data Diagnosis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDiagnosis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDiagnosis), array('view', 'id'=>$data->idDiagnosis)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Patients_idPatients')); ?>:</b>
	<?php echo CHtml::encode($data->patientsIdPatients->md5hash); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('knee')); ?>:</b>
	<?php echo CHtml::encode($data->knee?'Right':'Left'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status?'Confirmed':'Unconfirmed'); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('authority')); ?>:</b>
	<?php echo CHtml::encode($data->authority); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SystemUsers_idSystemUser')); ?>:</b>
	<?php echo CHtml::encode($data->systemUsersIdSystemUser->username); ?>
	<br />
	*/ ?>

</div>