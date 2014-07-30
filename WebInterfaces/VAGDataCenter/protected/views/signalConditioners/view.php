<?php
/* @var $this SignalConditionersController */
/* @var $model SignalConditioners */

$this->breadcrumbs=array(
	'Signal Conditioners'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List All Signal Conditioners', 'url'=>array('index')),
	array('label'=>'Add New Signal Conditioner', 'url'=>array('create')),
	array('label'=>'Update This Signal Conditioner', 'url'=>array('update', 'id'=>$model->idSignalConditioners)),
	array('label'=>'Delete This SignalConditioner', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSignalConditioners),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Signal Conditioners', 'url'=>array('admin')),
);
?>

<h1>View SignalConditioners #<?php echo $model->idSignalConditioners; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSignalConditioners',
		'name',
		'descriptions',
		array(
			'name'=> $model->getAttributeLabel('Companies_idCompanies'),
			'value'=> $model->companiesIdCompanies->name,
		),
	),
)); ?>
