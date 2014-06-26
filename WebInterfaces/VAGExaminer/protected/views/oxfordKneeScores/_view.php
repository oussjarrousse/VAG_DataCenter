<?php
/* @var $this OxfordKneeScoresController */
/* @var $data OxfordKneeScores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPatientsOxfordScores')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPatientsOxfordScores), array('view', 'id'=>$data->idPatientsOxfordScores)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Q1')); ?>:</b>
	<?php echo CHtml::encode($data->Q1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Q2')); ?>:</b>
	<?php echo CHtml::encode($data->Q2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Q3')); ?>:</b>
	<?php echo CHtml::encode($data->Q3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Q4')); ?>:</b>
	<?php echo CHtml::encode($data->Q4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Q5')); ?>:</b>
	<?php echo CHtml::encode($data->Q5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Q6')); ?>:</b>
	<?php echo CHtml::encode($data->Q6); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Q7')); ?>:</b>
	<?php echo CHtml::encode($data->Q7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Q8')); ?>:</b>
	<?php echo CHtml::encode($data->Q8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Q9')); ?>:</b>
	<?php echo CHtml::encode($data->Q9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Q10')); ?>:</b>
	<?php echo CHtml::encode($data->Q10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Q11')); ?>:</b>
	<?php echo CHtml::encode($data->Q11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Q12')); ?>:</b>
	<?php echo CHtml::encode($data->Q12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Patients_idPatients')); ?>:</b>
	<?php echo CHtml::encode($data->Patients_idPatients); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sessions_idSession')); ?>:</b>
	<?php echo CHtml::encode($data->Sessions_idSession); ?>
	<br />

	*/ ?>

</div>