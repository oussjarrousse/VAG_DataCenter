<?php
/* @var $this PossibleDiagnosisController */
/* @var $model PossibleDiagnosis */

$this->breadcrumbs=array(
	'Possible Diagnosises'=>array('index'),
	$model->idPossibleDiagnosis,
);

$this->menu=array(
	array('label'=>'List PossibleDiagnosis', 'url'=>array('index')),
	array('label'=>'Create PossibleDiagnosis', 'url'=>array('create')),
	array('label'=>'Update PossibleDiagnosis', 'url'=>array('update', 'id'=>$model->idPossibleDiagnosis)),
	array('label'=>'Delete PossibleDiagnosis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPossibleDiagnosis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PossibleDiagnosis', 'url'=>array('admin')),
);
?>

<h1>View PossibleDiagnosis #<?php echo $model->idPossibleDiagnosis; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPossibleDiagnosis',
		'Code',
		'Letter',
		'Arabic',
		'Roman',
		'Location',
	),
)); ?>
