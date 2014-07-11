<?php
/* @var $this OxfordKneeScoresController */
/* @var $model OxfordKneeScores */

$this->breadcrumbs=array(
	'Oxford Knee Scores'=>array('index'),
	$model->idPatientsOxfordScores,
);

$this->menu=array(
//	array('label'=>'List OxfordKneeScores', 'url'=>array('index')),
//	array('label'=>'Create OxfordKneeScores', 'url'=>array('create')),
//	array('label'=>'Update OxfordKneeScores', 'url'=>array('update', 'id'=>$model->idPatientsOxfordScores)),
//	array('label'=>'Delete OxfordKneeScores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPatientsOxfordScores),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage OxfordKneeScores', 'url'=>array('admin')),
);

?>
<br></br>

<h3>Oxford Knee Score</h3>

<div class="view">
<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPatientsOxfordScores',
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
	),
));
*/?>
<b><?php echo CHtml::encode($model->Score()); ?></b>
</div>