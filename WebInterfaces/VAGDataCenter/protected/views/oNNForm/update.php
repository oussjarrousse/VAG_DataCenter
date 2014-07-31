<?php
/* @var $this ONNFormController */
/* @var $model ONNForm */

$this->breadcrumbs=array(
	'Onnforms'=>array('index'),
	$model->idONNForm=>array('view','id'=>$model->idONNForm),
	'Update',
);

$this->menu=array(
	array('label'=>'List ONNForm', 'url'=>array('index')),
	array('label'=>'Create ONNForm', 'url'=>array('create')),
	array('label'=>'View ONNForm', 'url'=>array('view', 'id'=>$model->idONNForm)),
	array('label'=>'Manage ONNForm', 'url'=>array('admin')),
);
?>

<h1>Update ONNForm <?php echo $model->idONNForm; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>