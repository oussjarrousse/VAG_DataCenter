<?php
/* @var $this SessionsController */
/* @var $model Sessions */

$this->breadcrumbs=array(
	'Sessions'=>array('index'),
	$model->idSession,
);

$this->menu=array(
	array('label'=>'List Sessions', 'url'=>array('index')),
	array('label'=>'Create Sessions', 'url'=>array('create')),
	array('label'=>'Update Sessions', 'url'=>array('update', 'id'=>$model->idSession)),
	array('label'=>'Delete Sessions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSession),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sessions', 'url'=>array('admin')),
);
?>

<h1>View Sessions #<?php echo $model->idSession; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSession',
		'timestamp',
		'SystemUsers_idSystemUser',
		'Patients_idPatients',
	),
)); ?>
