<?php
/* @var $this ONNFormController */
/* @var $model ONNForm */

$this->breadcrumbs=array(
	'Sessions'=>array('sessions/list'),
	'Session #' .	$model->Sessions_idSession .' Details' => array('/Sessions/View&id='.$model->Sessions_idSession),
	'New ONN Form',
);

<<<<<<< HEAD
//$this->menu=array(
//	array('label'=>'List ONNForm', 'url'=>array('index')),
//	array('label'=>'Manage ONNForm', 'url'=>array('admin')),
//);
?>

<h1>New ONNForm</h1>
=======
$this->menu=array(
//	array('label'=>'List ONNForm', 'url'=>array('index')),
//	array('label'=>'Manage ONNForm', 'url'=>array('admin')),
);
?>

<h1>Create ONNForm</h1>
>>>>>>> 7c2ac12422d3545e3df8c468e91e69b024f4993b

<?php $this->renderPartial('_form', array('model'=>$model)); ?>