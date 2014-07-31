<?php
/* @var $this SystemUsersController */
/* @var $model SystemUsers */

$this->breadcrumbs=array(
	'System Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All System Users', 'url'=>array('index')),
	array('label'=>'Manage System Users', 'url'=>array('admin')),
);
?>

<h1>Add New System User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>