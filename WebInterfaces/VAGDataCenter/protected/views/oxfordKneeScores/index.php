<?php
/* @var $this OxfordKneeScoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Oxford Knee Scores',
);

$this->menu=array(
	array('label'=>'Create OxfordKneeScores', 'url'=>array('create')),
	array('label'=>'Manage OxfordKneeScores', 'url'=>array('admin')),
);
?>

<h1>Oxford Knee Scores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
