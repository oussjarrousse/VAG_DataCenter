<?php
/* @var $this OxfordKneeScoresController */
/* @var $model OxfordKneeScores */

$this->breadcrumbs=array(
	'Oxford Knee Scores'=>array('index'),
	$model->idPatientsOxfordScores=>array('view','id'=>$model->idPatientsOxfordScores),
	'Update',
);

$this->menu=array(
	array('label'=>'List All Oxford Knee Score Forms', 'url'=>array('index')),
	array('label'=>'Add New Oxford Knee Score Form', 'url'=>array('create')),
	array('label'=>'View All Oxford Knee Score Forms', 'url'=>array('view', 'id'=>$model->idPatientsOxfordScores)),
	array('label'=>'Manage Oxford Knee Score Forms', 'url'=>array('admin')),
);
?>

<h1>Update OxfordKneeScores <?php echo $model->idPatientsOxfordScores; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'answers'=>$model->answersLabels())); ?>