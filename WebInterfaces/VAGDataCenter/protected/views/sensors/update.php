<?php
/* @var $this SensorsController */
/* @var $model Sensors */

$this->breadcrumbs=array(
	'Sensors'=>array('index'),
	$model->name=>array('view','id'=>$model->idSensors),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sensors', 'url'=>array('index')),
	array('label'=>'Create Sensors', 'url'=>array('create')),
	array('label'=>'View Sensors', 'url'=>array('view', 'id'=>$model->idSensors)),
	array('label'=>'Manage Sensors', 'url'=>array('admin')),
);
?>

<h1>Update Sensors <?php echo $model->idSensors; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>