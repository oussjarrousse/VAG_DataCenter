<?php
/* @var $this PatientsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patients',
);

$this->menu=array(
	array('label'=>'Add New Patient', 'url'=>array('PatientsSecret/create')),
	array('label'=>'Manage Patients', 'url'=>array('PatientsSecret/admin')),
);

?>

<h1>Patients</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'idPatients',
		'birthdate',
		'md5hash',
		array(
				'name' => 'gender',
				'value' => '$data->genderLabel',
		),
	),
)); ?>
