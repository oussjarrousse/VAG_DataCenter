<?php
/* @var $this PossibleDiagnosisController */
/* @var $model PossibleDiagnosis */

$this->breadcrumbs=array(
	'Possible Diagnosises'=>array('index'),
	$model->idPossibleDiagnosis=>array('view','id'=>$model->idPossibleDiagnosis),
	'Update',
);

$this->menu=array(
	array('label'=>'List All Possible Diagnosis', 'url'=>array('index')),
	array('label'=>'Create New PossibleDiagnosis', 'url'=>array('create')),
	array('label'=>'View This Possible Diagnosis', 'url'=>array('view', 'id'=>$model->idPossibleDiagnosis)),
	array('label'=>'Manage Possible Diagnosis', 'url'=>array('admin')),
);
?>

<h1>Update Possible Diagnosis: <?php echo $model->Code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>