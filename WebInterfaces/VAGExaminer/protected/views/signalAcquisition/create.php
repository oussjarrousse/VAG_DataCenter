<?php
/* @var $this SignalAcquisitionController */
/* @var $model SignalAcquisition */

$this->breadcrumbs=array(
	'Sessions'=>array('sessions/list'),
	'Session #' .	$model->Sessions_idSession .' Details' => array('/Sessions/View&id='.$model->Sessions_idSession),
	'New Signal Acquisition',
);

//$this->menu=array(
//	array('label'=>'List SignalAcquisition', 'url'=>array('index')),
//	array('label'=>'Manage SignalAcquisition', 'url'=>array('admin')),
//);
?>

<h1>New SignalAcquisition</h1>

<?php //$this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->renderPartial('_formForm', array('model'=>$model)); ?>