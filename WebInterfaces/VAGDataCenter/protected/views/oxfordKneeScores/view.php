<?php
/* @var $this OxfordKneeScoresController */
/* @var $model OxfordKneeScores */

$this->breadcrumbs=array(
	'Oxford Knee Scores'=>array('index'),
	$model->idPatientsOxfordScores,
);

$this->menu=array(
	array('label'=>'List All Oxford Knee Score Forms', 'url'=>array('index')),
	array('label'=>'Add New Oxford Knee Score Form', 'url'=>array('create')),
	array('label'=>'Update This Oxford Knee Score Form', 'url'=>array('update', 'id'=>$model->idPatientsOxfordScores)),
	array('label'=>'Delete This Oxford Knee Score Form', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPatientsOxfordScores),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Oxford Knee Score Forms', 'url'=>array('admin')),
);
?>

<h1>View Oxford Knee Score Form #<?php echo $model->idPatientsOxfordScores; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPatientsOxfordScores',
		array(
			'name'=>'Session',
			'value'=>$model->sessionsIdSession->sessionName,
		),		
		array(
			'name'=>'Patient',
			'value'=>$model->patientsIdPatients->md5hash,
		),
		array(
			'name'=>'Scope',
			'value'=>$model->Scope,
		),
		'Q1',
		'Q2',
		'Q3',
		'Q4',
		'Q5',
		'Q6',
		'Q7',
		'Q8',
		'Q9',
		'Q10',
		'Q11',
		'Q12',
		array(
			'name'=>'Score',
			'value'=>$model->Score(),
		),
	),
)); ?>
