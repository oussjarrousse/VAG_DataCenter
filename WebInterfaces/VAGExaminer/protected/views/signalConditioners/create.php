<?php
/* @var $this SignalConditionersController */
/* @var $model SignalConditioners */

$this->breadcrumbs=array(
	'Signal Conditioners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SignalConditioners', 'url'=>array('index')),
	array('label'=>'Manage SignalConditioners', 'url'=>array('admin')),
);
?>

<h1>Create SignalConditioners</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>