<?php
/* @var $this ProtocolsController */
/* @var $model Protocols */

$this->breadcrumbs=array(
	'Protocols'=>array('index'),
	$model->name=>array('view','id'=>$model->idProtocols),
	'Update',
);

$this->menu=array(
	array('label'=>'List All Protocols', 'url'=>array('index')),
	array('label'=>'Add New Protocol', 'url'=>array('create')),
	array('label'=>'View This Protocol', 'url'=>array('view', 'id'=>$model->idProtocols)),
	array('label'=>'Manage Protocols', 'url'=>array('admin')),
);
?>

<h1>Update Protocol #<?php echo $model->idProtocols; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>