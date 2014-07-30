<?php
/* @var $this SignalConditionersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Signal Conditioners',
);

$this->menu=array(
	array('label'=>'Add New Signal Conditioner', 'url'=>array('create')),
	array('label'=>'Manage Signal Conditioners', 'url'=>array('admin')),
);
?>

<h1>Signal Conditioners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
