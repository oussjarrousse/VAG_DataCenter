<?php
/* @var $this OxfordKneeScoresController */
/* @var $model OxfordKneeScores */

$this->breadcrumbs=array(
	'Sessions'=>array('sessions/list'),
	'Session #' .	$model->Sessions_idSession .' Details' => array('/Sessions/View&id='.$model->Sessions_idSession),
	'New Oxford Knee Scores Form',
);

//$this->menu=array(
//	array('label'=>'List OxfordKneeScores', 'url'=>array('index')),
//	array('label'=>'Manage OxfordKneeScores', 'url'=>array('admin')),
//);
?>

<h1>New OxfordKneeScores Form</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'answers'=>$model->answersLabels())); ?>