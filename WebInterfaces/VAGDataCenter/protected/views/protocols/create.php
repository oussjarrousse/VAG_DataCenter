<?php
/* @var $this ProtocolsController */
/* @var $model Protocols */

$this->breadcrumbs=array(
	'Protocols'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Protocols', 'url'=>array('index')),
	array('label'=>'Manage Protocols', 'url'=>array('admin')),
);
?>

<h1>Add New Protocol</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>