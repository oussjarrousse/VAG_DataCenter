<?php
/* @var $this PossibleDiagnosisController */
/* @var $model PossibleDiagnosis */

$this->breadcrumbs=array(
	'Possible Diagnosises'=>array('index'),
	$model->idPossibleDiagnosis=>array('view','id'=>$model->idPossibleDiagnosis),
	'Update',
);

$this->menu=array(
	array('label'=>'List PossibleDiagnosis', 'url'=>array('index')),
	array('label'=>'Create PossibleDiagnosis', 'url'=>array('create')),
	array('label'=>'View PossibleDiagnosis', 'url'=>array('view', 'id'=>$model->idPossibleDiagnosis)),
	array('label'=>'Manage PossibleDiagnosis', 'url'=>array('admin')),
);
?>

<h1>Update PossibleDiagnosis <?php echo $model->idPossibleDiagnosis; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>