<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<!-- 
<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
 -->
<p>
<?php echo CHtml::link('System Users',array('SystemUsers/admin')); ?>
</p>
<p>
<?php echo CHtml::link('Patients Secret',array('PatientsSecret/admin')); ?>
</p> 
<p>
<?php echo CHtml::link('Patients ---- must present more in patients view',array('Patients/index')); ?>
</p> 
<p>
<?php echo CHtml::link('Companies',array('Companies/admin')); ?>
</p> 
<p>
<?php echo CHtml::link('Orthosis',array('Orthosis/admin')); ?>
</p> 
<p>
<?php echo CHtml::link('Sensors',array('Sensors/admin')); ?>
</p> 
<p>
<?php echo CHtml::link('Signal Conditioners',array('SignalConditioners/admin')); ?>
</p> 
<p>
<?php echo CHtml::link('Protocols',array('Protocols/admin')); ?>
</p> 
<p>
<?php echo CHtml::link('Sessions ---- must present more about patient and signals',array('Sessions/admin')); ?>
</p>
<p>
<?php echo CHtml::link('Oxford Knee Score Forms',array('OxfordKneeScores/admin')); ?>
</p>
<p>
<?php echo CHtml::link('ONN Forms',array('ONNForm/admin')); ?>
</p> 
<p>
<?php echo CHtml::link('Signals ---- view still inhumane',array('SignalAcquisition/admin')); ?>
</p>
<p>
<?php echo CHtml::link('Diagnosis ---- delete is not working - view still inhumane',array('Diagnosis/admin')); ?>
</p>
<p>
<?php echo CHtml::link('Possible Diagnosis',array('PossibleDiagnosis/admin')); ?>
</p>