<?php
/* @var $this PatientsSecretController */
/* @var $model PatientsSecret */

$this->breadcrumbs=array(
	'Patients Secrets'=>array('index'),
	$model->idPatientsSecret,
);

$this->menu=array(
	array('label'=>'List Patients', 'url'=>array('index')),		
	array('label'=>'Add New Patient', 'url'=>array('create')),
	array('label'=>'Update Patient', 'url'=>array('update', 'id'=>$model->idPatientsSecret)),
	array('label'=>'Delete Patient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPatientsSecret),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patients', 'url'=>array('admin')),
);
?>

<h1>View Patient #<?php echo $model->idPatientsSecret; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPatientsSecret',
		'firstname',
		'lastname',
		'birthdate',
		/*
		array(
			'name' => 'birthdate',
			'value' => Yii::app()->dateFormatter->format('dd.MM.yyyy', $model->birthdate),
		),
		//*/
		'md5',
		array(
			'name'=>'gender',
			'value'=> $model->genderLabel,
		),
	),
)); ?>
