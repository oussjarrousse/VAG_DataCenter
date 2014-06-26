<?php
/* @var $this SensorsController */
/* @var $data Sensors */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSensors')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSensors), array('view', 'id'=>$data->idSensors)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descriptions')); ?>:</b>
	<?php echo CHtml::encode($data->descriptions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Companies_idCompanies')); ?>:</b>
	<?php echo CHtml::encode($data->Companies_idCompanies); ?>
	<br />


</div>