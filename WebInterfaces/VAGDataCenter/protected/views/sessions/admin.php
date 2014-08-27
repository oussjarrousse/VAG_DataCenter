<?php
/* @var $this SessionsController */
/* @var $model Sessions */

$this->breadcrumbs=array(
	'Sessions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List All Sessions', 'url'=>array('index')),
	array('label'=>'Import Session', 'url'=>array('import')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sessions-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sessions</h1>

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
	'id'=>'sessions-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idSession',
		'sessionName',
		'timestamp',
		array(
			'name' => 'SystemUsers_idSystemUser',
			'value' => '$data->systemUsersIdSystemUser->username',
			'filter' => CHTML::listData(SystemUsers::model()->findAll(),'idSystemUser','username'),
		),
		array(
			'name'=>'Patients_idPatients',
			'value' => '$data->patientsIdPatients->md5hash',
			'filter' => CHTML::listData(Patients::model()->findAll(),'idPatients','md5hash'),
		),		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
		),
	),
)); ?>
