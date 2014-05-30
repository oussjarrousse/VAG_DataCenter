<?php
/* @var $this SignalConditionersController */
/* @var $data SignalConditioners */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSignalConditioners')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSignalConditioners), array('view', 'id'=>$data->idSignalConditioners)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descriptions')); ?>:</b>
	<?php echo CHtml::encode($data->descriptions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Company_idCompany')); ?>:</b>
	<?php echo CHtml::encode($data->Company_idCompany); ?>
	<br />


</div>