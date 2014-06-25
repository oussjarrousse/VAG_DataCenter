<?php
/* @var $this OxfordKneeScoresController */
/* @var $model OxfordKneeScores */
/* @var $form CActiveForm */
/* $answers = $model->answersLabels() */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'oxford-knee-scores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Scope'); ?>
		<?php echo $form->radioButtonList($model,'Scope',array('0'=>$answers['Scope_Left'],'1'=>$answers['Scope_Right'],'2'=>$answers['Scope_Both']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Scope'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Q1'); ?>
		<?php echo $form->radioButtonList($model,'Q1',array('1'=>$answers['Q1_1'],'2'=>$answers['Q1_2'],'3'=>$answers['Q1_3'],'4'=>$answers['Q1_4'],'5'=>$answers['Q1_5']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Q1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q2'); ?>
		<?php echo $form->radioButtonList($model,'Q2',array('1'=>$answers['Q2_1'],'2'=>$answers['Q2_2'],'3'=>$answers['Q2_3'],'4'=>$answers['Q2_4'],'5'=>$answers['Q2_5']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Q2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q3'); ?>
		<?php echo $form->radioButtonList($model,'Q3',array('1'=>$answers['Q3_1'],'2'=>$answers['Q3_2'],'3'=>$answers['Q3_3'],'4'=>$answers['Q3_4'],'5'=>$answers['Q2_5']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Q3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q4'); ?>
		<?php echo $form->radioButtonList($model,'Q4',array('1'=>$answers['Q4_1'],'2'=>$answers['Q4_2'],'3'=>$answers['Q4_3'],'4'=>$answers['Q4_4'],'5'=>$answers['Q4_5']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Q4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q5'); ?>
		<?php echo $form->radioButtonList($model,'Q5',array('1'=>$answers['Q5_1'],'2'=>$answers['Q5_2'],'3'=>$answers['Q5_3'],'4'=>$answers['Q5_4'],'5'=>$answers['Q5_5']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Q5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q6'); ?>
		<?php echo $form->radioButtonList($model,'Q6',array('1'=>$answers['Q6_1'],'2'=>$answers['Q6_2'],'3'=>$answers['Q6_3'],'4'=>$answers['Q6_4'],'5'=>$answers['Q6_5']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Q6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q7'); ?>
		<?php echo $form->radioButtonList($model,'Q7',array('1'=>$answers['Q7_1'],'2'=>$answers['Q7_2'],'3'=>$answers['Q7_3'],'4'=>$answers['Q7_4'],'5'=>$answers['Q7_5']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Q7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q8'); ?>
		<?php echo $form->radioButtonList($model,'Q8',array('1'=>$answers['Q8_1'],'2'=>$answers['Q8_2'],'3'=>$answers['Q8_3'],'4'=>$answers['Q8_4'],'5'=>$answers['Q8_5']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Q8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q9'); ?>
		<?php echo $form->radioButtonList($model,'Q9',array('1'=>$answers['Q9_1'],'2'=>$answers['Q9_2'],'3'=>$answers['Q9_3'],'4'=>$answers['Q9_4'],'5'=>$answers['Q9_5']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Q9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q10'); ?>
		<?php echo $form->radioButtonList($model,'Q10',array('1'=>$answers['Q10_1'],'2'=>$answers['Q10_2'],'3'=>$answers['Q10_3'],'4'=>$answers['Q10_4'],'5'=>$answers['Q10_5']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Q10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q11'); ?>
		<?php echo $form->radioButtonList($model,'Q11',array('1'=>$answers['Q11_1'],'2'=>$answers['Q11_2'],'3'=>$answers['Q11_3'],'4'=>$answers['Q11_4'],'5'=>$answers['Q11_5']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Q11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q12'); ?>
		<?php echo $form->radioButtonList($model,'Q12',array('1'=>$answers['Q12_1'],'2'=>$answers['Q12_2'],'3'=>$answers['Q12_3'],'4'=>$answers['Q12_4'],'5'=>$answers['Q12_5']),array('separator'=>'<br>','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'Q12'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Done' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->