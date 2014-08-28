<?php
/* @var $this SignalAcquisitionController */
/* @var $model SignalAcquisition */

$this->breadcrumbs=array(
	'Signal Acquisitions'=>array('index'),
	$model->idSignalAcquisition,
);

$this->menu=array(
	array('label'=>'List Signals', 'url'=>array('index')),
	array('label'=>'Add New Signal', 'url'=>array('create')),
	array('label'=>'Update This Signal', 'url'=>array('update', 'id'=>$model->idSignalAcquisition)),
	array('label'=>'Delete This Signal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSignalAcquisition),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Signals', 'url'=>array('admin')),
);
?>

<h1>View SignalAcquisition #<?php echo $model->idSignalAcquisition; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSignalAcquisition',
		'Patients_idPatients',
		'Sessions_idSession',
		'knee',
		'position',
		'Sensors_idSensors',
		'Protocols_idProtocols',
		'SignalConditioners_idSignalConditioners',
		'Orthosis_idOrthosis',
		'samplesRate',
		'bitsPerSample',
		'startTime',
		'filename',
	),
)); ?>
