<?php
/* @var $this OxfordKneeScoresController */
/* @var $model OxfordKneeScores */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPatientsOxfordScores'); ?>
		<?php echo $form->textField($model,'idPatientsOxfordScores',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Scope'); ?>
		<?php echo $form->textField($model,'Scope'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Q1'); ?>
		<?php echo $form->textField($model,'Q1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Q2'); ?>
		<?php echo $form->textField($model,'Q2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Q3'); ?>
		<?php echo $form->textField($model,'Q3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Q4'); ?>
		<?php echo $form->textField($model,'Q4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Q5'); ?>
		<?php echo $form->textField($model,'Q5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Q6'); ?>
		<?php echo $form->textField($model,'Q6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Q7'); ?>
		<?php echo $form->textField($model,'Q7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Q8'); ?>
		<?php echo $form->textField($model,'Q8'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Q9'); ?>
		<?php echo $form->textField($model,'Q9'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Q10'); ?>
		<?php echo $form->textField($model,'Q10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Q11'); ?>
		<?php echo $form->textField($model,'Q11'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Q12'); ?>
		<?php echo $form->textField($model,'Q12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Patients_idPatients'); ?>
		<?php echo $form->textField($model,'Patients_idPatients',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sessions_idSession'); ?>
		<?php echo $form->textField($model,'Sessions_idSession',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->