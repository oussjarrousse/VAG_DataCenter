<?php
/* @var $this SessionsController */
/* @var $model Sessions */

$this->breadcrumbs=array(
	'Sessions'=>array('index'),
	$model->idSession=>array('view','id'=>$model->idSession),
	'Update',
);

$this->menu=array(
	array('label'=>'List All Sessions', 'url'=>array('index')),
	array('label'=>'Import Session', 'url'=>array('import')),
	array('label'=>'View This Session', 'url'=>array('view', 'id'=>$model->idSession)),
	array('label'=>'Manage Sessions', 'url'=>array('admin')),
);
?>

<h1>Update Sessions <?php echo $model->idSession; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>