<?php
/* @var $this PossibleDiagnosisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Possible Diagnosises',
);

$this->menu=array(
	array('label'=>'Create PossibleDiagnosis', 'url'=>array('create')),
	array('label'=>'Manage PossibleDiagnosis', 'url'=>array('admin')),
);
?>

<h1>Possible Diagnosises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
