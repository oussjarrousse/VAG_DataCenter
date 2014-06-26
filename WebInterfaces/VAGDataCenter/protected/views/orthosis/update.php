<?php
/* @var $this OrthosisController */
/* @var $model Orthosis */

$this->breadcrumbs=array(
	'Orthosises'=>array('index'),
	$model->name=>array('view','id'=>$model->idOrthosis),
	'Update',
);

$this->menu=array(
	array('label'=>'List Orthosis', 'url'=>array('index')),
	array('label'=>'Create Orthosis', 'url'=>array('create')),
	array('label'=>'View Orthosis', 'url'=>array('view', 'id'=>$model->idOrthosis)),
	array('label'=>'Manage Orthosis', 'url'=>array('admin')),
);
?>

<h1>Update Orthosis <?php echo $model->idOrthosis; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>