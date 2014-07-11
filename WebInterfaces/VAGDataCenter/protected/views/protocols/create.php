<?php
/* @var $this ProtocolsController */
/* @var $model Protocols */

$this->breadcrumbs=array(
	'Protocols'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Protocols', 'url'=>array('index')),
	array('label'=>'Manage Protocols', 'url'=>array('admin')),
);
?>

<h1>Create Protocols</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>