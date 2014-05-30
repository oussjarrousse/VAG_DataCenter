<?php
/* @var $this OrthosisController */
/* @var $data Orthosis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idOrthosis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idOrthosis), array('view', 'id'=>$data->idOrthosis)); ?>
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