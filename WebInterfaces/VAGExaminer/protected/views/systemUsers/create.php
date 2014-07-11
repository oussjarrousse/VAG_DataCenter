<?php
/* @var $this SystemUsersController */
/* @var $model SystemUsers */

$this->breadcrumbs=array(
	'System Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SystemUsers', 'url'=>array('index')),
	array('label'=>'Manage SystemUsers', 'url'=>array('admin')),
);
?>

<h1>Create SystemUsers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>