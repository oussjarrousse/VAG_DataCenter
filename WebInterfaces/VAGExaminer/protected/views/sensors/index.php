<?php
/* @var $this SensorsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sensors',
);

$this->menu=array(
	array('label'=>'Create Sensors', 'url'=>array('create')),
	array('label'=>'Manage Sensors', 'url'=>array('admin')),
);
?>

<h1>Sensors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
