<?php
/* @var $this ONNFormController */
/* @var $model ONNForm */

$this->breadcrumbs=array(
	'Onnforms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List All ONN Forms', 'url'=>array('index')),
	array('label'=>'Add New ONN Form', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#onnform-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage ONN Forms</h1>

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
	'id'=>'onnform-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idONNForm',
		'weight',
		'height',
		array(
			'header'=>'Session',
			'value'=>'$data->sessionsIdSession->sessionName',
		),	
		array(
			'header'=>'Patient',
			'value'=>'$data->patientsIdPatients->md5hash',
		),
		'complaintsDate',
		/*
		'complaintsCause',
		'natureOfWork',
		'sportActivities',
		'diagnosis',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
