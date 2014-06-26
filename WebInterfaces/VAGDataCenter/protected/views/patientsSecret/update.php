<?php
/* @var $this PatientsSecretController */
/* @var $model PatientsSecret */

$this->breadcrumbs=array(
	'Patients Secrets'=>array('index'),
	$model->idPatientsSecret=>array('view','id'=>$model->idPatientsSecret),
	'Update',
);

$this->menu=array(
	array('label'=>'List PatientsSecret', 'url'=>array('index')),
	array('label'=>'Create PatientsSecret', 'url'=>array('create')),
	array('label'=>'View PatientsSecret', 'url'=>array('view', 'id'=>$model->idPatientsSecret)),
	array('label'=>'Manage PatientsSecret', 'url'=>array('admin')),
);
?>

<h1>Update PatientsSecret <?php echo $model->idPatientsSecret; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>