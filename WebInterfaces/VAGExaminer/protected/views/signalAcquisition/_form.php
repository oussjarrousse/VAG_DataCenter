<?php
/* @var $this SignalAcquisitionController */
/* @var $model SignalAcquisition */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'signal-acquisition-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
		<div class="row">
		<?php echo $form->labelEx($model,'knee'); ?>
		<?php echo $form->dropDownList($model,'knee', array('0'=>'Left','1'=>'Right')); ?>
		<?php echo $form->error($model,'knee'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Protocols_idProtocols'); ?>
		<?php echo $form->dropDownList($model,'Protocols_idProtocols', CHtml::listData(Protocols::model()->findAll(), 'idProtocols', 'name')); ?>
		<?php echo $form->error($model,'Protocols_idProtocols'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Sensors_idSensors_patella'); ?>
		<?php echo $form->dropDownList($model,'Sensors_idSensors_patella', array('-1'=> 'None') + CHtml::listData(Sensors::model()->findAll(), 'idSensors','name')); ?>
		<?php echo $form->error($model,'Sensors_idSensors_patella'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Sensors_idSensors_tibialPlateauMedial'); ?>
		<?php echo $form->dropDownList($model,'Sensors_idSensors_tibialPlateauMedial', array('-1'=> 'None') + CHtml::listData(Sensors::model()->findAll(), 'idSensors', 'name')); ?>
		<?php echo $form->error($model,'Sensors_idSensors_tibialPlateauMedial'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Sensors_idSensors_tibialPlateauLateral'); ?>
		<?php echo $form->dropDownList($model,'Sensors_idSensors_tibialPlateauLateral', array('-1'=> 'None') + CHtml::listData(Sensors::model()->findAll(), 'idSensors', 'name')); ?>
		<?php echo $form->error($model,'Sensors_idSensors_tibialPlateauLateral'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SignalConditioners_idSignalConditioners'); ?>
		<?php echo $form->dropDownList($model,'SignalConditioners_idSignalConditioners', CHtml::listData(SignalConditioners::model()->findAll(), 'idSignalConditioners', 'name')); ?>
		<?php echo $form->error($model,'SignalConditioners_idSignalConditioners'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Orthosis_idOrthosis'); ?>
		<?php echo $form->dropDownList($model,'Orthosis_idOrthosis', CHtml::listData(Orthosis::model()->findAll(), 'idOrthosis', 'name')); ?>
		<?php echo $form->error($model,'Orthosis_idOrthosis'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'samplesRate'); ?>
		<?php echo $form->textField($model,'samplesRate'); ?>
		<?php echo $form->error($model,'samplesRate'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'bitsPerSample'); ?>
		<?php echo $form->textField($model,'bitsPerSample'); ?>
		<?php echo $form->error($model,'bitsPerSample'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Create'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->