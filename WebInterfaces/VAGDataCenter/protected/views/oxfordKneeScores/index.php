<?php
/* @var $this OxfordKneeScoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Oxford Knee Scores',
);

$this->menu=array(
	array('label'=>'Add New Oxford Knee Score Form', 'url'=>array('create')),
	array('label'=>'Manage Oxford Knee Score Forms', 'url'=>array('admin')),
);
?>

<h1>Oxford Knee Scores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
