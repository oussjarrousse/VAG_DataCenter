<?php
/* @var $this DiagnosisController */
/* @var $model Diagnosis */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'diagnosis-form',
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
		<?php echo $form->labelEx($model,'date'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'name'=>'datepicker-diagnosis',
				//'flat'=>true,
				'attribute'=>'date',
				'model' => $model,
				'options'=>array(
					'dateFormat'=>'dd.mm.yy',
					'maxDate'=>'new Date()', // Today
					'minDate'=>'01.01.1900',
					'showAnim'=>'blind',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
					'changeYear'=>true,
					'yearRange'=>'1900:'.date("Y"),
				))
			);
		?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'knee'); ?>
		<?php echo $form->dropDownList($model, 'knee', array(	'0'=>'Left',
																'1'=>'Right')); ?> 
		<?php echo $form->error($model,'knee'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model, 'Diagnosis');?>
		<?php //Create a list of options of Possible Diagnosis to select some, same the selected id in an array?>
		<?php //Create a list of options of Possible Diagnosis to select some, same the selected id in an array?>
		<?php 
			//*
			$data = CHtml::listData(PossibleDiagnosis::model()->findAll(array('order'=>'idPossibleDiagnosis')), 'idPossibleDiagnosis', 'Code');
			$attributes = array('multiple'=>'true', 'style', 'width:400px;','size'=>'10');
			echo $form->dropDownList($model, 'selectedPossibleDiagnosis', $data, $attributes);
		?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model, 'status', array(	'0'=>'Unconfirmed',
																'1'=>'Confirmed')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
		
	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textField($model,'notes',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'authority'); ?>
		<?php echo $form->textField($model,'authority',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'authority'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->