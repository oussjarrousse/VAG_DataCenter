<?php
/* @var $this ONNFormController */
/* @var $model ONNForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'onnform-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'complaintsDate'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'name'=>'datepicker-ONNFormForm',
				//'flat'=>true,
				'attribute'=>'complaintsDate',
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
		<?php echo $form->error($model,'complaintsDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'complaintsCause'); ?>
		<?php echo $form->textArea($model,'complaintsCause',array('maxlength'=>256, 'rows'=>4, 'cols'=>45, 'style' => 'resize:none')); ?>
		<?php echo $form->error($model,'complaintsCause'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'natureOfWork'); ?>
		<?php echo $form->textArea($model,'natureOfWork',array('maxlength'=>256, 'rows'=>4, 'cols'=>45, 'style' => 'resize:none')); ?>
		<?php echo $form->error($model,'natureOfWork'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sportActivities'); ?>
		<?php echo $form->textArea($model,'sportActivities',array('maxlength'=>256, 'rows'=>4, 'cols'=>45, 'style' => 'resize:none')); ?>
		<?php echo $form->error($model,'sportActivities'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnosis'); ?>
		<?php echo $form->textArea($model,'diagnosis',array('maxlength'=>256, 'rows'=>4, 'cols'=>45, 'style' => 'resize:none')); ?>
		<?php echo $form->error($model,'diagnosis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->