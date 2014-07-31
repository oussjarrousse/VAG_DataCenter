<?php
/* @var $this OxfordKneeScoresController */
/* @var $model OxfordKneeScores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'oxford-knee-scores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Scope'); ?>
		<?php echo $form->textField($model,'Scope'); ?>
		<?php echo $form->error($model,'Scope'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q1'); ?>
		<?php echo $form->textField($model,'Q1'); ?>
		<?php echo $form->error($model,'Q1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q2'); ?>
		<?php echo $form->textField($model,'Q2'); ?>
		<?php echo $form->error($model,'Q2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q3'); ?>
		<?php echo $form->textField($model,'Q3'); ?>
		<?php echo $form->error($model,'Q3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q4'); ?>
		<?php echo $form->textField($model,'Q4'); ?>
		<?php echo $form->error($model,'Q4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q5'); ?>
		<?php echo $form->textField($model,'Q5'); ?>
		<?php echo $form->error($model,'Q5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q6'); ?>
		<?php echo $form->textField($model,'Q6'); ?>
		<?php echo $form->error($model,'Q6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q7'); ?>
		<?php echo $form->textField($model,'Q7'); ?>
		<?php echo $form->error($model,'Q7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q8'); ?>
		<?php echo $form->textField($model,'Q8'); ?>
		<?php echo $form->error($model,'Q8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q9'); ?>
		<?php echo $form->textField($model,'Q9'); ?>
		<?php echo $form->error($model,'Q9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q10'); ?>
		<?php echo $form->textField($model,'Q10'); ?>
		<?php echo $form->error($model,'Q10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q11'); ?>
		<?php echo $form->textField($model,'Q11'); ?>
		<?php echo $form->error($model,'Q11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q12'); ?>
		<?php echo $form->textField($model,'Q12'); ?>
		<?php echo $form->error($model,'Q12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Patients_idPatients'); ?>
		<?php echo $form->textField($model,'Patients_idPatients',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Patients_idPatients'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sessions_idSession'); ?>
		<?php echo $form->textField($model,'Sessions_idSession',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Sessions_idSession'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->