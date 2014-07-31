<?php
/* @var $this SystemUsersController */
/* @var $model SystemUsers */

$this->breadcrumbs=array(
	'System Users'=>array('index'),
	$model->idSystemUser,
);

$this->menu=array(
	array('label'=>'List All System Users', 'url'=>array('index')),
	array('label'=>'Add New System User', 'url'=>array('create')),
	array('label'=>'Update This System User', 'url'=>array('update', 'id'=>$model->idSystemUser)),
	array('label'=>'Manage System Users', 'url'=>array('admin')),
);
?>

<h1>View System User #<?php echo $model->idSystemUser; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSystemUser',
		'username',
		'firstname',
		'lastname',
		'email',
		'password',
		array(
			'name'=>'active',
			'value'=>$model->active?'Yes':'False',
		),
	),
)); ?>
