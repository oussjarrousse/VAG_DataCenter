<?php
/* @var $this SessionsController */
/* @var $model Sessions */

$this->breadcrumbs=array(
	'Sessions'=>array('index'),
	$model->idSession,
);

$this->menu=array(
	array('label'=>'List All Sessions', 'url'=>array('index')),
	array('label'=>'Import Sessions', 'url'=>array('import')),
	array('label'=>'Update Sessions', 'url'=>array('update', 'id'=>$model->idSession)),
	//array('label'=>'Delete Sessions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSession),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sessions', 'url'=>array('admin')),
);
?>

<h1>View Session #<?php echo $model->idSession; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSession',
		'sessionName',
		'timestamp',
		array(
			'name' => 'SystemUsers_idSystemUser',
			'value' => $model->systemUsersIdSystemUser->username . ' ('.$model->systemUsersIdSystemUser->firstname. ' '. $model->systemUsersIdSystemUser->lastname.')',
		),
		array(
			'name' => 'Patients_idPatients',
			'value' => $model->patientsIdPatients->md5hash,
		),
	),
)); ?>
