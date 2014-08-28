<?php
/* @var $this SignalAcquisitionController */
/* @var $model SignalAcquisition */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idSignalAcquisition'); ?>
		<?php echo $form->textField($model,'idSignalAcquisition',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Patients_idPatients'); ?>
		<?php echo $form->textField($model,'Patients_idPatients',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sessions_idSession'); ?>
		<?php echo $form->textField($model,'Sessions_idSession',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'knee'); ?>
		<?php echo $form->textField($model,'knee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position'); ?>
		<?php echo $form->textField($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sensors_idSensors'); ?>
		<?php echo $form->textField($model,'Sensors_idSensors',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Protocols_idProtocols'); ?>
		<?php echo $form->textField($model,'Protocols_idProtocols',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SignalConditioners_idSignalConditioners'); ?>
		<?php echo $form->textField($model,'SignalConditioners_idSignalConditioners',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Orthosis_idOrthosis'); ?>
		<?php echo $form->textField($model,'Orthosis_idOrthosis',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'samplesRate'); ?>
		<?php echo $form->textField($model,'samplesRate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bitsPerSample'); ?>
		<?php echo $form->textField($model,'bitsPerSample'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startTime'); ?>
		<?php echo $form->textField($model,'startTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filename'); ?>
		<?php echo $form->textField($model,'filename',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->