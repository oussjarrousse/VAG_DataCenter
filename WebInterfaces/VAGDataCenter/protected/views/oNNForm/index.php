<?php
/* @var $this ONNFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Onnforms',
);

$this->menu=array(
	array('label'=>'Create ONNForm', 'url'=>array('create')),
	array('label'=>'Manage ONNForm', 'url'=>array('admin')),
);
?>

<h1>Onnforms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
