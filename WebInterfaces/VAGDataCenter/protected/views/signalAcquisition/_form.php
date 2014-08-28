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
		<?php echo $form->labelEx($model,'Patients_idPatients'); ?>
		<?php echo $form->dropDownList($model, 'Patients_idPatients', $model->getPatientsOptions()); ?>
		<?php echo $form->error($model,'Patients_idPatients'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Sessions_idSession'); ?>
		<?php echo $form->dropDownList($model, 'Sessions_idSession', $model->getSessionsOptions()); ?>
		<?php echo $form->error($model,'Sessions_idSession'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'knee'); ?>
		<?php echo $form->dropDownList($model, 'knee', array(	'0'=>'Left',
																'1'=>'Right')); ?> 
		<?php echo $form->error($model,'knee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->dropDownList($model, 'position', array(	'0'=>'Patella',
																'1'=>'Tibiaplateau Medial',
																'2'=>'Tibiaplateau Lateral')); ?> 
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sensors_idSensors'); ?>
		<?php echo $form->dropDownList($model, 'Sensors_idSensors', $model->getSensorsOptions()); ?>
		<?php echo $form->error($model,'Sensors_idSensors'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Protocols_idProtocols'); ?>
		<?php echo $form->dropDownList($model, 'Protocols_idProtocols', $model->getProtocolsOptions()); ?>
		<?php echo $form->error($model,'Protocols_idProtocols'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SignalConditioners_idSignalConditioners'); ?>
		<?php echo $form->dropDownList($model,'SignalConditioners_idSignalConditioners', $model->getSignalConditionersOptions()); ?>
		<?php echo $form->error($model,'SignalConditioners_idSignalConditioners'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Orthosis_idOrthosis'); ?>
		<?php echo $form->dropDownList($model,'Orthosis_idOrthosis',$model->getOrthosisOptions()); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'startTime'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'name'=>'datepicker-patientsSecretForm',
				//'flat'=>true,
				'attribute'=>'startTime',
				'model' => $model,
				'options'=>array(
					'dateFormat'=>'dd.mm.yy',
					'maxDate'=>'new Date()', // Today
					'minDate'=>'15.11.2013',
					'showAnim'=>'blind',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
					'changeYear'=>true,
					'yearRange'=>'2014:'.date("Y"),
				))
			);
		?>
		<?php echo $form->error($model,'startTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filename'); ?>
		<?php echo $form->textField($model,'filename',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'filename'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->