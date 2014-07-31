<?php
/* @var $this SystemUsersController */
/* @var $model SystemUsers */

$this->breadcrumbs=array(
	'System Users'=>array('index'),
	$model->idSystemUser=>array('view','id'=>$model->idSystemUser),
	'Update',
);

$this->menu=array(
	array('label'=>'List All System Users', 'url'=>array('index')),
	array('label'=>'Add New System User', 'url'=>array('create')),
	array('label'=>'View This System User', 'url'=>array('view', 'id'=>$model->idSystemUser)),
	array('label'=>'Manage System Users', 'url'=>array('admin')),
);
?>

<h1>Update SystemUsers <?php echo $model->idSystemUser; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>