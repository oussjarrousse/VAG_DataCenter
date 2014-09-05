<?php
/* @var $this PossibleDiagnosisController */
/* @var $model PossibleDiagnosis */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'possible-diagnosis-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Code'); ?>
		<?php echo $form->textField($model,'Code',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Letter'); ?>
		<?php echo $form->textField($model,'Letter',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'Letter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Arabic'); ?>
		<?php echo $form->textField($model,'Arabic',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Arabic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Roman'); ?>
		<?php echo $form->textField($model,'Roman',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'Roman'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Location'); ?>
		<?php echo $form->textField($model,'Location',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'Location'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->