<?php
/* @var $this SignalAcquisitionController */
/* @var $model SignalAcquisition */

$this->breadcrumbs=array(
	'Signal Acquisitions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List All Signals', 'url'=>array('index')),
	array('label'=>'Add New Signals', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#signal-acquisition-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Signal Acquisitions</h1>

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
	'id'=>'signal-acquisition-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idSignalAcquisition',
		'Patients_idPatients',
		'Sessions_idSession',
		'knee',
		'position',
		'Sensors_idSensors',
		/*
		'Protocols_idProtocols',
		'SignalConditioners_idSignalConditioners',
		'Orthosis_idOrthosis',
		'samplesRate',
		'bitsPerSample',
		'startTime',
		'filename',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
