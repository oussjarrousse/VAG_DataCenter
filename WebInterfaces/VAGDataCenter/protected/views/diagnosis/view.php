<?php
/* @var $this DiagnosisController */
/* @var $model Diagnosis */

$this->breadcrumbs=array(
	'Diagnosises'=>array('index'),
	$model->idDiagnosis,
);

$this->menu=array(
	array('label'=>'List Diagnosis', 'url'=>array('index')),
	array('label'=>'Create Diagnosis', 'url'=>array('create')),
	array('label'=>'Update Diagnosis', 'url'=>array('update', 'id'=>$model->idDiagnosis)),
	array('label'=>'Delete Diagnosis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDiagnosis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Diagnosis', 'url'=>array('admin')),
);
?>

<h1>View Diagnosis #<?php echo $model->idDiagnosis; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDiagnosis',
		'date',
		'Patients_idPatients',
	),
)); ?>
