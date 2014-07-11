<?php
/* @var $this ProtocolsController */
/* @var $data Protocols */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProtocols')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProtocols), array('view', 'id'=>$data->idProtocols)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descriptions')); ?>:</b>
	<?php echo CHtml::encode($data->descriptions); ?>
	<br />


</div>