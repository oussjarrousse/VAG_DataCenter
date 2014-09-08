<?php
/* @var $this DiagnosisController */
/* @var $model Diagnosis */

$this->breadcrumbs=array(
	'Diagnosises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Diagnosis', 'url'=>array('index')),
	array('label'=>'Manage Diagnosis', 'url'=>array('admin')),
);
?>

<h1>Add New Diagnosis</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>