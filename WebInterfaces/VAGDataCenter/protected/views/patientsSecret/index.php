<?php
/* @var $this PatientsSecretController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patients Secrets',
);

	$this->menu=array(
	array('label'=>'Create PatientsSecret', 'url'=>array('create')),
	array('label'=>'Manage PatientsSecret', 'url'=>array('admin')),
);
?>

<h1>Patients Secrets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
