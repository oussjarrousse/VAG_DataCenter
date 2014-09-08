<?php
/* @var $this PossibleDiagnosisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Possible Diagnosises',
);

$this->menu=array(
	array('label'=>'Add New Possible Diagnosis', 'url'=>array('create')),
	array('label'=>'Manage Possible Diagnosis', 'url'=>array('admin')),
);
?>

<h1>Possible Diagnosises</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'possible-diagnosis-grid',
	'dataProvider'=>$dataProvider,
	//'filter'=>$dataProvider,
	'columns'=>array(
		'idPossibleDiagnosis',
		'Code',
		'Letter',
		'Arabic',
		'Roman',
		'Location',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
		),
	),
)); ?>
