<?php
/* @var $this PossibleDiagnosisController */
/* @var $model PossibleDiagnosis */

$this->breadcrumbs=array(
	'Possible Diagnosises'=>array('index'),
	$model->idPossibleDiagnosis,
);

$this->menu=array(
	array('label'=>'List All Possible Diagnosis', 'url'=>array('index')),
	array('label'=>'Add New Possible Diagnosis', 'url'=>array('create')),
	array('label'=>'Update This Possible Diagnosis', 'url'=>array('update', 'id'=>$model->idPossibleDiagnosis)),
	array('label'=>'Delete This Possible Diagnosis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPossibleDiagnosis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Possible Diagnosis', 'url'=>array('admin')),
);
?>

<h1>View Possible Diagnosis:  <?php echo $model->Code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPossibleDiagnosis',
		'Code',
		'Letter',
		'Arabic',
		'Roman',
		'Location',
	),
)); ?>
