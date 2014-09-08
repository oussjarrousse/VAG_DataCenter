<?php
/* @var $this PatientsController */
/* @var $model Patients */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->idPatients,
);

$this->menu=array(
	array('label'=>'List Patients', 'url'=>array('index')),
//*
	array('label'=>'Add New Patient', 'url'=>array('PatientsSecret/create')),
	array('label'=>'Update Patient', 'url'=>array('PatientsSecret/update', 'id'=>$model->idPatients)),
	array('label'=>'Delete Patients', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPatients),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patients', 'url'=>array('PatientsSecret/admin')),
//*/	
);
?>

<h1>View Patients: <?php echo $model->md5hash; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPatients',
		'md5hash',
		//*
		'name' => 'birthdate',
		//*/
		/*
		array(
		'name' => 'birthdate',
		'value' => Yii::app()->dateFormatter->format('dd.MM.yyyy', $model->birthdate),
		),
		//*/
		//*
		array(
			'name'=>'gender',
			'value'=> $model->genderLabel,
		),
		//*/
	),
)); ?>