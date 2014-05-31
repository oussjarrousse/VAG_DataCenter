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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Companies_idCompanies')); ?>:</b>
	<?php echo CHtml::encode($data->Companies_idCompanies); ?>
	<br />


</div>