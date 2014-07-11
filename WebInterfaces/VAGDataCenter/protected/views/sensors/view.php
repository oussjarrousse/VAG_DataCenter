<?php
/* @var $this SensorsController */
/* @var $model Sensors */

$this->breadcrumbs=array(
	'Sensors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Sensors', 'url'=>array('index')),
	array('label'=>'Create Sensors', 'url'=>array('create')),
	array('label'=>'Update Sensors', 'url'=>array('update', 'id'=>$model->idSensors)),
	array('label'=>'Delete Sensors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSensors),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sensors', 'url'=>array('admin')),
);
?>

<h1>View Sensors #<?php echo $model->idSensors; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSensors',
		'name',
		'type',
		'descriptions',
		'Companies_idCompanies',
	),
)); ?>
