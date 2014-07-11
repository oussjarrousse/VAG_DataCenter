<?php
/* @var $this SignalAcquisitionController */
/* @var $model SignalAcquisition */

$this->breadcrumbs=array(
		'Oxford Knee Scores'=>array('index'),
		$model->idPatientsOxfordScores,
);

$this->menu=array(
//	array('label'=>'List SignalAcquisition', 'url'=>array('index')),
//	array('label'=>'Create SignalAcquisition', 'url'=>array('create')),
//	array('label'=>'Update SignalAcquisition', 'url'=>array('update', 'id'=>$model->idSignalAcquisition)),
//	array('label'=>'Delete SignalAcquisition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSignalAcquisition),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage SignalAcquisition', 'url'=>array('admin')),
);
?>

<h1>View SignalAcquisition #<?php echo $model->idSignalAcquisition; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSignalAcquisition',
		'Patients_idPatients',
		'Sessions_idSession',
		'Sensors_idSensors',
		'Protocols_idProtocols',
		'SignalConditioners_idSignalConditioners',
		'Orthosis_idOrthosis',
		'startTime',
		'endTime',
		'knee',
		'iterations',
		'bitsPerSample',
		'filename',
		'samplesRate',
	),
)); ?>
