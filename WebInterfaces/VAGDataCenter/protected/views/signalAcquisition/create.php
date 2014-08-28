<?php
/* @var $this SignalAcquisitionController */
/* @var $model SignalAcquisition */

$this->breadcrumbs=array(
	'Signal Acquisitions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Signals', 'url'=>array('index')),
	array('label'=>'Manage Signals', 'url'=>array('admin')),
);
?>

<h1>Create SignalAcquisition</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>