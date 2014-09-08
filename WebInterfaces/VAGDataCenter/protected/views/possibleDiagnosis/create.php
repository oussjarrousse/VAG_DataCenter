<?php
/* @var $this PossibleDiagnosisController */
/* @var $model PossibleDiagnosis */

$this->breadcrumbs=array(
	'Possible Diagnosises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Possible Diagnosis', 'url'=>array('index')),
	array('label'=>'Manage Possible Diagnosis', 'url'=>array('admin')),
);
?>

<h1>Add New Possible Diagnosis</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>