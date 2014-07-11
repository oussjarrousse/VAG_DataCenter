<?php
/* @var $this SessionsController */
/* @var $model Sessions */

$this->breadcrumbs=array(
	'Sessions'=>array('index'),
	$model->idSession=>array('view','id'=>$model->idSession),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sessions', 'url'=>array('index')),
	array('label'=>'Create Sessions', 'url'=>array('create')),
	array('label'=>'View Sessions', 'url'=>array('view', 'id'=>$model->idSession)),
	array('label'=>'Manage Sessions', 'url'=>array('admin')),
);
?>

<h1>Update Sessions <?php echo $model->idSession; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>