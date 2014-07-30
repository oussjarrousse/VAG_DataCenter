<?php
/* @var $this OrthosisController */
/* @var $model Orthosis */

$this->breadcrumbs=array(
	'Orthosises'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List All Orthosis', 'url'=>array('index')),
	array('label'=>'Add New Orthosis', 'url'=>array('create')),
	array('label'=>'Update This Orthosis', 'url'=>array('update', 'id'=>$model->idOrthosis)),
	array('label'=>'Delete This Orthosis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idOrthosis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Orthosis', 'url'=>array('admin')),
);
?>

<h1>View Orthosis #<?php echo $model->idOrthosis; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idOrthosis',
		'name',
		'descriptions',
		array(
			'name'=> $model->getAttributeLabel('Companies_idCompanies'),
			'value'=> $model->companiesIdCompanies->name,
		),
	),
)); ?>
