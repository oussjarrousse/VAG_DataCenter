<?php
/* @var $this SignalAcquisitionController */
/* @var $data SignalAcquisition */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSignalAcquisition')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSignalAcquisition), array('view', 'id'=>$data->idSignalAcquisition)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Patients_idPatients')); ?>:</b>
	<?php echo CHtml::encode($data->Patients_idPatients); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sessions_idSession')); ?>:</b>
	<?php echo CHtml::encode($data->Sessions_idSession); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sensors_idSensors')); ?>:</b>
	<?php echo CHtml::encode($data->Sensors_idSensors); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Protocols_idProtocols')); ?>:</b>
	<?php echo CHtml::encode($data->Protocols_idProtocols); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SignalConditioners_idSignalConditioners')); ?>:</b>
	<?php echo CHtml::encode($data->SignalConditioners_idSignalConditioners); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Orthosis_idOrthosis')); ?>:</b>
	<?php echo CHtml::encode($data->Orthosis_idOrthosis); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('startTime')); ?>:</b>
	<?php echo CHtml::encode($data->startTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endTime')); ?>:</b>
	<?php echo CHtml::encode($data->endTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('knee')); ?>:</b>
	<?php echo CHtml::encode($data->knee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iterations')); ?>:</b>
	<?php echo CHtml::encode($data->iterations); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bitsPerSample')); ?>:</b>
	<?php echo CHtml::encode($data->bitsPerSample); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filename')); ?>:</b>
	<?php echo CHtml::encode($data->filename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('samplesRate')); ?>:</b>
	<?php echo CHtml::encode($data->samplesRate); ?>
	<br />

	*/ ?>

</div>