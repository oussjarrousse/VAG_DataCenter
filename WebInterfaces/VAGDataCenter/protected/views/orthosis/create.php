<?php
/* @var $this OrthosisController */
/* @var $model Orthosis */

$this->breadcrumbs=array(
	'Orthosises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Orthosis', 'url'=>array('index')),
	array('label'=>'Manage Orthosis', 'url'=>array('admin')),
);
?>

<h1>Create Orthosis</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>