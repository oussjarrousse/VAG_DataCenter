<?php
/* @var $this SignalAcquisitionController */
/* @var $model SignalAcquisition */

$this->breadcrumbs=array(
	'Signal Acquisitions'=>array('index'),
	$model->idSignalAcquisition=>array('view','id'=>$model->idSignalAcquisition),
	'Update',
);

$this->menu=array(
	array('label'=>'List All Signals', 'url'=>array('index')),
	array('label'=>'Add New Signal', 'url'=>array('create')),
	array('label'=>'View This Signals', 'url'=>array('view', 'id'=>$model->idSignalAcquisition)),
	array('label'=>'Manage Signals', 'url'=>array('admin')),
);
?>

<h1>Update SignalAcquisition <?php echo $model->idSignalAcquisition; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>