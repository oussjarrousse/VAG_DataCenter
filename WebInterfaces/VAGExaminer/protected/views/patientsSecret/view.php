<?php
/* @var $this PatientsSecretController */
/* @var $model PatientsSecret */

$this->breadcrumbs=array(
	'Patients Secrets'=>array('index'),
	$model->idPatientsSecret,
);

$this->menu=array(
	array('label'=>'List PatientsSecret', 'url'=>array('index')),		
	array('label'=>'Create PatientsSecret', 'url'=>array('create')),
	array('label'=>'Update PatientsSecret', 'url'=>array('update', 'id'=>$model->idPatientsSecret)),
	array('label'=>'Delete PatientsSecret', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPatientsSecret),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PatientsSecret', 'url'=>array('admin')),
);
?>

<h1>View PatientsSecret #<?php echo $model->idPatientsSecret; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPatientsSecret',
		'firstname',
		'lastname',
		'birthdate',
		'md5',
		'gender',
	),
)); ?>
