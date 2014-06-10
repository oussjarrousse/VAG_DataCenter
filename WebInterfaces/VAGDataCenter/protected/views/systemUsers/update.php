<?php
/* @var $this SystemUsersController */
/* @var $model SystemUsers */

$this->breadcrumbs=array(
	'System Users'=>array('index'),
	$model->idSystemUser=>array('view','id'=>$model->idSystemUser),
	'Update',
);

$this->menu=array(
	array('label'=>'List SystemUsers', 'url'=>array('index')),
	array('label'=>'Create SystemUsers', 'url'=>array('create')),
	array('label'=>'View SystemUsers', 'url'=>array('view', 'id'=>$model->idSystemUser)),
	array('label'=>'Manage SystemUsers', 'url'=>array('admin')),
);
?>

<h1>Update SystemUsers <?php echo $model->idSystemUser; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>