<?php
/* @var $this SessionsController */
/* @var $model Sessions */
<<<<<<< HEAD
/* @var $renderedSessionDetailsView HTML string */
=======
>>>>>>> 7c2ac12422d3545e3df8c468e91e69b024f4993b

$this->breadcrumbs=array(
	'Sessions'=>array('list'), 'Session #' .	$model->idSession .' Details',
);
<<<<<<< HEAD

=======
//*
>>>>>>> 7c2ac12422d3545e3df8c468e91e69b024f4993b
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
<<<<<<< HEAD
//	array('label'=>'Add DICOM', 'url'=>array('/DICOM/Create')),
//	array('label'=>'Add Diagnosis', 'url'=>array('/Diagnosis/Create')),
);

=======
	array('label'=>'Add DICOM', 'url'=>array('/DICOM/Create')),
	array('label'=>'Add Diagnosis', 'url'=>array('/Diagnosis/Create')),
);
//*/
>>>>>>> 7c2ac12422d3545e3df8c468e91e69b024f4993b
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
<<<<<<< HEAD

<?php echo $renderedSessionDetailsView; ?>
=======
<br>
<?php
//if there are acquired signals, list them here 
echo '<h2>Acquired Signals</h2>'
?>
<br>
<?php
//if there are Oxford knee scores forms, blend them in
echo '<h2>Oxford knee scores</h2>'
?>
<br>
<?php
//if there is an ONN Form
echo '<h2>ONN Form</h2>'
?>
<br>
<?php
//if there are DICOM Data
echo '<h2>DICOM Data</h2>'
?>
<br>
<?php
//if there is a diagnosis
echo '<h2>Diagnosis</h2>'
?>
>>>>>>> 7c2ac12422d3545e3df8c468e91e69b024f4993b
