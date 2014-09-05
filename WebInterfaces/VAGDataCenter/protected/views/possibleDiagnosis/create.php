<?php
/* @var $this PossibleDiagnosisController */
/* @var $model PossibleDiagnosis */

$this->breadcrumbs=array(
	'Possible Diagnosises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PossibleDiagnosis', 'url'=>array('index')),
	array('label'=>'Manage PossibleDiagnosis', 'url'=>array('admin')),
);
?>

<h1>Create PossibleDiagnosis</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>