<?php
/* @var $this SessionsController */
/* @var $model Sessions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sessions-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sessionName'); ?>
		<?php echo $form->textField($model,'sessionName'); ?>
		<?php echo $form->error($model,'sessionName'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'timestamp'); ?>
		<?php
		//* 
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'name'=>'datepicker-patientsSecretForm',
				//'flat'=>true,
				'attribute'=>'timestamp',
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
		//*/
		?>
		<?php echo $form->error($model,'timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SystemUsers_idSystemUser'); ?>
		<?php echo $form->dropDownList($model, 'SystemUsers_idSystemUser', $model->getSystemUsersOptions()); ?>
		<?php echo $form->error($model,'SystemUsers_idSystemUser'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Patients_idPatients'); ?>
		<?php echo $form->dropDownList($model, 'Patients_idPatients', $model->getPatientsOptions()); ?>
		<?php echo $form->error($model,'Patients_idPatients'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->