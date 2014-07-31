<?php
/* @var $this OxfordKneeScoresController */
/* @var $model OxfordKneeScores */

$this->breadcrumbs=array(
	'Oxford Knee Scores'=>array('index'),
	$model->idPatientsOxfordScores=>array('view','id'=>$model->idPatientsOxfordScores),
	'Update',
);

$this->menu=array(
	array('label'=>'List OxfordKneeScores', 'url'=>array('index')),
	array('label'=>'Create OxfordKneeScores', 'url'=>array('create')),
	array('label'=>'View OxfordKneeScores', 'url'=>array('view', 'id'=>$model->idPatientsOxfordScores)),
	array('label'=>'Manage OxfordKneeScores', 'url'=>array('admin')),
);
?>

<h1>Update OxfordKneeScores <?php echo $model->idPatientsOxfordScores; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>