<?php
/* @var $this SignalConditionersController */
/* @var $model SignalConditioners */

$this->breadcrumbs=array(
	'Signal Conditioners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Signal Conditioners', 'url'=>array('index')),
	array('label'=>'Manage Signal Conditioners', 'url'=>array('admin')),
);
?>

<h1>Create Signal Conditioners</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>