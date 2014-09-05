<?php
/* @var $this PossibleDiagnosisController */
/* @var $data PossibleDiagnosis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPossibleDiagnosis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPossibleDiagnosis), array('view', 'id'=>$data->idPossibleDiagnosis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Code')); ?>:</b>
	<?php echo CHtml::encode($data->Code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Letter')); ?>:</b>
	<?php echo CHtml::encode($data->Letter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Arabic')); ?>:</b>
	<?php echo CHtml::encode($data->Arabic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Roman')); ?>:</b>
	<?php echo CHtml::encode($data->Roman); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Location')); ?>:</b>
	<?php echo CHtml::encode($data->Location); ?>
	<br />


</div>