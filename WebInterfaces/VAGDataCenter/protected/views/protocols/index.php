<?php
/* @var $this ProtocolsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Protocols',
);

$this->menu=array(
	array('label'=>'Create Protocols', 'url'=>array('create')),
	array('label'=>'Manage Protocols', 'url'=>array('admin')),
);
?>

<h1>Protocols</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
