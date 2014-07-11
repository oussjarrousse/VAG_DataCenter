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

<<<<<<< HEAD
<h1>New OxfordKneeScores Form</h1>
=======
<h1>Create OxfordKneeScores</h1>
>>>>>>> 7c2ac12422d3545e3df8c468e91e69b024f4993b

<?php $this->renderPartial('_form', array('model'=>$model,'answers'=>$model->answersLabels())); ?>