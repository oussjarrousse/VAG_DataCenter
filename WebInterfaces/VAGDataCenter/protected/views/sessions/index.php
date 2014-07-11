<?php
/* @var $this SessionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sessions',
);

$this->menu=array(
	array('label'=>'Create Sessions', 'url'=>array('create')),
	array('label'=>'Manage Sessions', 'url'=>array('admin')),
);
?>

<h1>Sessions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
