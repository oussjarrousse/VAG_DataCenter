<?php
/* @var $this SessionsController */
/* @var $model Sessions */

$this->breadcrumbs=array(
	'Sessions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Sessions', 'url'=>array('index')),
	array('label'=>'Manage Sessions', 'url'=>array('admin')),
	array('label'=>'Import Sessions', 'url'=>array('import')),
);
?>

<h1>Create Sessions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>