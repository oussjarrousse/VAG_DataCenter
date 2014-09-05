<?php
/* @var $this OxfordKneeScoresController */
/* @var $model OxfordKneeScores */

$this->breadcrumbs=array(
	'Oxford Knee Scores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List All Oxford Knee Score Forms', 'url'=>array('index')),
	array('label'=>'Add New Oxford Knee Score Form', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#oxford-knee-scores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Oxford Knee Score Forms</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'oxford-knee-scores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idPatientsOxfordScores',
		array(
			'header'=>'Session',
			'value'=>'$data->sessionsIdSession->sessionName',
		),
		array(
			'header'=>'Patient',
			'value'=>'$data->patientsIdPatients->md5hash',
		),
		array(
			'name'=>'Scope',
			'value'=>'$data->Scope',
		),
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
