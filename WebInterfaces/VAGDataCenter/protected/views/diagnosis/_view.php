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
	<?php echo CHtml::encode($data->Patients_idPatients); ?>
	<br />


</div>