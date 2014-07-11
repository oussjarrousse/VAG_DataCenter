<?php
/* @var $this SessionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sessions',
);

$this->menu=array(
	array('label'=>'New Session', 'url'=>array('create')),
);
?>

<h1>Sessions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
