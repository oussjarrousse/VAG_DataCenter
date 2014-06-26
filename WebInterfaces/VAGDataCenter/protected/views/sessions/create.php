<?php
/* @var $this SessionsController */
/* @var $model Sessions */

$this->breadcrumbs=array(
	'Sessions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sessions', 'url'=>array('index')),
	array('label'=>'Manage Sessions', 'url'=>array('admin')),
);
?>

<h1>Create Sessions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>