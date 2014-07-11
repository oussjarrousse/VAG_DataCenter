<?php
/* @var $this ONNFormController */
/* @var $data ONNForm */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idONNForm')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idONNForm), array('view', 'id'=>$data->idONNForm)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('height')); ?>:</b>
	<?php echo CHtml::encode($data->height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Patients_idPatients')); ?>:</b>
	<?php echo CHtml::encode($data->Patients_idPatients); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sessions_idSession')); ?>:</b>
	<?php echo CHtml::encode($data->Sessions_idSession); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complaintsDate')); ?>:</b>
	<?php echo CHtml::encode($data->complaintsDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complaintsCause')); ?>:</b>
	<?php echo CHtml::encode($data->complaintsCause); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('natureOfWork')); ?>:</b>
	<?php echo CHtml::encode($data->natureOfWork); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sportActivities')); ?>:</b>
	<?php echo CHtml::encode($data->sportActivities); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnosis')); ?>:</b>
	<?php echo CHtml::encode($data->diagnosis); ?>
	<br />

	*/ ?>

</div>