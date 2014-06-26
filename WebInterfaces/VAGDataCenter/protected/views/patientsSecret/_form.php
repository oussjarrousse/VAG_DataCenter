<?php
/* @var $this PatientsSecretController */
/* @var $model PatientsSecret */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patients-secret-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthdate'); ?>
		<!--<?php echo $form->dateField($model, 'birthdate'); ?>-->
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'attribute'=>'birthdate',
				'model' => $model,
				'options'=>array(
					'dateFormat'=>'YYYY-MM-DD', //MySQL Like
					'maxDate'=>'new Date()', // Today
					//'minDate'=>'+1m', // One month ahead					
				))
			);
		?>
		<?php echo $form->error($model,'birthdate'); ?>
	</div>
<!--  
	<div class="row">
		<?php echo $form->labelEx($model,'md5'); ?>
		<?php echo $form->textField($model,'md5',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'md5'); ?>
	</div>
-->	
	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->dropDownList($model, 'gender', array('0'=>'Male','1'=>'Female')); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->