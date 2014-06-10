<?php
/* @var $this SystemUsersController */
/* @var $model SystemUsers */

$this->breadcrumbs=array(
	'System Users'=>array('index'),
	$model->idSystemUser,
);

$this->menu=array(
	array('label'=>'List SystemUsers', 'url'=>array('index')),
	array('label'=>'Create SystemUsers', 'url'=>array('create')),
	array('label'=>'Update SystemUsers', 'url'=>array('update', 'id'=>$model->idSystemUser)),
	array('label'=>'Delete SystemUsers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSystemUser),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SystemUsers', 'url'=>array('admin')),
);
?>

<h1>View SystemUsers #<?php echo $model->idSystemUser; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSystemUser',
		'username',
		'firstname',
		'lastname',
		'email',
		'password',
	),
)); ?>
