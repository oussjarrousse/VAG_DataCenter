<?php
/* @var $this ONNFormController */
/* @var $model ONNForm */

$this->breadcrumbs=array(
	'Onnforms'=>array('index'),
	$model->idONNForm,
);

$this->menu=array(
	array('label'=>'List ONNForm', 'url'=>array('index')),
	array('label'=>'Create ONNForm', 'url'=>array('create')),
	array('label'=>'Update ONNForm', 'url'=>array('update', 'id'=>$model->idONNForm)),
	array('label'=>'Delete ONNForm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idONNForm),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ONNForm', 'url'=>array('admin')),
);
?>

<h1>View ONNForm #<?php echo $model->idONNForm; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idONNForm',
		'weight',
		'height',
		'Patients_idPatients',
		'Sessions_idSession',
		'complaintsDate',
		'complaintsCause',
		'natureOfWork',
		'sportActivities',
		'diagnosis',
	),
)); ?>
