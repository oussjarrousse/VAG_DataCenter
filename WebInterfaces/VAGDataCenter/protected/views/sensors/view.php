<?php
/* @var $this SensorsController */
/* @var $model Sensors */

$this->breadcrumbs=array(
	'Sensors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List All Sensors', 'url'=>array('index')),
	array('label'=>'Add New Sensor', 'url'=>array('create')),
	array('label'=>'Update This Sensor', 'url'=>array('update', 'id'=>$model->idSensors)),
	array('label'=>'Delete This Sensor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSensors),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sensors', 'url'=>array('admin')),
);
?>

<h1>View Sensor #<?php echo $model->idSensors; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSensors',
		'name',
		'type',
		'descriptions',
		array(
			'name'=> $model->getAttributeLabel('Companies_idCompanies'),
			'value'=> $model->companiesIdCompanies->name,
		),
	),
)); ?>
