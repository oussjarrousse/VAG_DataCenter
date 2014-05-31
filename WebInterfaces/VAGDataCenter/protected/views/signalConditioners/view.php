<?php
/* @var $this SignalConditionersController */
/* @var $model SignalConditioners */

$this->breadcrumbs=array(
	'Signal Conditioners'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SignalConditioners', 'url'=>array('index')),
	array('label'=>'Create SignalConditioners', 'url'=>array('create')),
	array('label'=>'Update SignalConditioners', 'url'=>array('update', 'id'=>$model->idSignalConditioners)),
	array('label'=>'Delete SignalConditioners', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSignalConditioners),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SignalConditioners', 'url'=>array('admin')),
);
?>

<h1>View SignalConditioners #<?php echo $model->idSignalConditioners; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSignalConditioners',
		'name',
		'descriptions',
		'Companies_idCompanies',
	),
)); ?>
