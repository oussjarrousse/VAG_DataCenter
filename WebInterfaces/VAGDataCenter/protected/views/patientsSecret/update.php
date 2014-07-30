<?php
/* @var $this PatientsSecretController */
/* @var $model PatientsSecret */

$this->breadcrumbs=array(
	'Patients Secrets'=>array('index'),
	$model->idPatientsSecret=>array('view','id'=>$model->idPatientsSecret),
	'Update',
);

$this->menu=array(
	array('label'=>'List Patients', 'url'=>array('index')),
	array('label'=>'Add New Patient', 'url'=>array('create')),
	array('label'=>'View Patient', 'url'=>array('view', 'id'=>$model->idPatientsSecret)),
	array('label'=>'Manage Patients', 'url'=>array('admin')),
);
?>

<h1>Update Patient #<?php echo $model->idPatientsSecret; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>