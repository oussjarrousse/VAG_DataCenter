<?php
/* @var $this OrthosisController */
/* @var $data Orthosis */
?>

<div class="view">
<table>
<tr style="font-weight: bold;">
	<td><?php echo CHtml::encode($data->getAttributeLabel('idOrthosis')); ?></td>
	<td><?php echo CHtml::encode($data->getAttributeLabel('name')); ?></td>
	<td><?php echo CHtml::encode($data->getAttributeLabel('descriptions')); ?></td>
	<td><?php echo CHtml::encode($data->getAttributeLabel('Companies_idCompanies')); ?></td>
</tr>
<tr>
	<td>
	<?php echo CHtml::link(CHtml::encode($data->idOrthosis), array('view', 'id'=>$data->idOrthosis)); ?>
	<br /></td>

	<td>
	<?php echo CHtml::encode($data->name); ?>
	<br /></td>

	<td>
	<?php echo CHtml::encode($data->descriptions); ?>
	<br /></td>

	<td>
	<?php echo CHtml::encode($data->Companies_idCompanies); ?>
	<br /></td>
</tr>
</table>
</div>