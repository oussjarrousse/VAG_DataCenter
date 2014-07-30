<?php
/* @var $this SignalConditionersController */
/* @var $model SignalConditioners */

$this->breadcrumbs=array(
	'Signal Conditioners'=>array('index'),
	$model->name=>array('view','id'=>$model->idSignalConditioners),
	'Update',
);

$this->menu=array(
	array('label'=>'List All Signal Conditioners', 'url'=>array('index')),
	array('label'=>'Add New Signal Conditioner', 'url'=>array('create')),
	array('label'=>'View This Signal Conditioner', 'url'=>array('view', 'id'=>$model->idSignalConditioners)),
	array('label'=>'Manage Signal Conditioners', 'url'=>array('admin')),
);
?>

<h1>Update SignalConditioners <?php echo $model->idSignalConditioners; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>