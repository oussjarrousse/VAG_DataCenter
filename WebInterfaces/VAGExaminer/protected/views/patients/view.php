<?php
/* @var $this PatientsController */
/* @var $model Patients */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->idPatients,
);

$this->menu=array(
	array('label'=>'List Patients', 'url'=>array('index')),
/*
	array('label'=>'Create Patients', 'url'=>array('create')),
	array('label'=>'Update Patients', 'url'=>array('update', 'id'=>$model->idPatients)),
	array('label'=>'Delete Patients', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPatients),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patients', 'url'=>array('admin')),
*/	
);
?>

<h2>Patient: <?php echo $model->md5hash; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'idPatients',
		//*
		'birthdate',
		//*/
		/*
		array(
		'name' => 'birthdate',
		'value' => Yii::app()->dateFormatter->format('dd.MM.yyyy', $model->birthdate),
		),
		//*/
		array(
			'name'=>'gender',
			'value'=> $model->genderLabel,
		), 
		'md5hash',
	),
)); ?>
