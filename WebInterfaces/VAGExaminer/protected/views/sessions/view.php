<?php
/* @var $this SessionsController */
/* @var $model Sessions */
/* @var $renderedSessionDetailsView HTML string */

$this->breadcrumbs=array(
	'Sessions'=>array('list'), 'Session #' .	$model->idSession .' Details',
);

$this->menu=array(
	array('label'=>'Patient Sessions', 'url'=>array('/Sessions/List')),
	//array('label'=>'Create Sessions', 'url'=>array('create')),
	//array('label'=>'Update Sessions', 'url'=>array('update', 'id'=>$model->idSession)),
	//array('label'=>'Delete Sessions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSession),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Sessions', 'url'=>array('admin')),
	//array('label'=>'New Signal Acquisition', 'url'=>array('/SignalAcquisition/Create' ,array('sessionId'=>$model->idSession,'patientId'=>$model->Patients_idPatients))),
	array('label'=>'Add Signal Acquisition', 'url'=>array('/SignalAcquisition/Create')),
	array('label'=>'Add Oxford Knee Scores Form', 'url'=>array('/OxfordKneeScores/Create')),
	array('label'=>'Add ONN Form', 'url'=>array('/ONNForm/Create')),
//	array('label'=>'Add DICOM', 'url'=>array('/DICOM/Create')),
//	array('label'=>'Add Diagnosis', 'url'=>array('/Diagnosis/Create')),
);

?>

<h2>Sessions #<?php echo $model->idSession; ?> Details</h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'Session Id', 'value'=>$model->idSession),
		'timestamp',
		array('name'=>'Examiner', 'value'=>$model->systemUsers->firstname . " " . $model->systemUsers->lastname),
		array('name'=>'Patient MD5 hash','value'=>$model->patients->md5hash),
	),
)); ?>

<?php echo $renderedSessionDetailsView; ?>