<?php
/* @var $this SignalAcquisitionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Signal Acquisitions',
);

$this->menu=array(
	array('label'=>'Add New Signals', 'url'=>array('create')),
	array('label'=>'Manage Signals', 'url'=>array('admin')),
);
?>

<h1>Signal Acquisitions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
