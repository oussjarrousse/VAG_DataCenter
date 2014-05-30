<?php
/* @var $this SignalConditionersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Signal Conditioners',
);

$this->menu=array(
	array('label'=>'Create SignalConditioners', 'url'=>array('create')),
	array('label'=>'Manage SignalConditioners', 'url'=>array('admin')),
);
?>

<h1>Signal Conditioners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
