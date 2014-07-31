<?php
/* @var $this OxfordKneeScoresController */
/* @var $model OxfordKneeScores */

$this->breadcrumbs=array(
	'Oxford Knee Scores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OxfordKneeScores', 'url'=>array('index')),
	array('label'=>'Manage OxfordKneeScores', 'url'=>array('admin')),
);
?>

<h1>Create OxfordKneeScores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>