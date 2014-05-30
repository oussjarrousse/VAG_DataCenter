<?php
/* @var $this CompanyController */
/* @var $data Company */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCompany')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCompany), array('view', 'id'=>$data->idCompany)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descriptions')); ?>:</b>
	<?php echo CHtml::encode($data->descriptions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contacts_idContacts')); ?>:</b>
	<?php echo CHtml::encode($data->Contacts_idContacts); ?>
	<br />


</div>