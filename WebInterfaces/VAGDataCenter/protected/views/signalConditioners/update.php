<?php
/* @var $this SignalConditionersController */
/* @var $model SignalConditioners */

$this->breadcrumbs=array(
	'Signal Conditioners'=>array('index'),
	$model->name=>array('view','id'=>$model->idSignalConditioners),
	'Update',
);

$this->menu=array(
	array('label'=>'List SignalConditioners', 'url'=>array('index')),
	array('label'=>'Create SignalConditioners', 'url'=>array('create')),
	array('label'=>'View SignalConditioners', 'url'=>array('view', 'id'=>$model->idSignalConditioners)),
	array('label'=>'Manage SignalConditioners', 'url'=>array('admin')),
);
?>

<h1>Update SignalConditioners <?php echo $model->idSignalConditioners; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>