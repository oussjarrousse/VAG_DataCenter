<?php
/* @var $this OxfordKneeScoresController */
/* @var $model OxfordKneeScores */

$this->breadcrumbs=array(
	'Oxford Knee Scores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Oxford Knee Score Forms', 'url'=>array('index')),
	array('label'=>'Manage Oxford Knee Score Forms', 'url'=>array('admin')),
);
?>

<h1>New Oxford Knee Score Form</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'answers'=>$model->answersLabels())); ?>