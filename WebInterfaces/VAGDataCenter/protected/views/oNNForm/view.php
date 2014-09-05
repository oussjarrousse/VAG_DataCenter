<?php
/* @var $this ONNFormController */
/* @var $model ONNForm */

$this->breadcrumbs=array(
	'Onnforms'=>array('index'),
	$model->idONNForm,
);

$this->menu=array(
	array('label'=>'List All ONN Forms', 'url'=>array('index')),
	array('label'=>'Add New ONN Form', 'url'=>array('create')),
	array('label'=>'Update This ONN Form', 'url'=>array('update', 'id'=>$model->idONNForm)),
	array('label'=>'Delete This ONN Form', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idONNForm),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ONN Forms', 'url'=>array('admin')),
);
?>

<h1>View ONNForm #<?php echo $model->idONNForm; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idONNForm',
		array(
			'name'=>'Session',
			'value'=>$model->sessionsIdSession->sessionName,
		),		
		array(
			'name'=>'Patient',
			'value'=>$model->patientsIdPatients->md5hash,
		),
		'weight',
		'height',
		'complaintsDate',
		'complaintsCause',
		'natureOfWork',
		'sportActivities',
		'diagnosis',
	),
)); ?>
