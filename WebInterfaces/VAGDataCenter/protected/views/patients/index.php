<?php
/* @var $this PatientsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patients',
);
/*
$this->menu=array(
	array('label'=>'Create Patients', 'url'=>array('create')),
	array('label'=>'Manage Patients', 'url'=>array('admin')),
);
*/
?>

<h1>Patients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
