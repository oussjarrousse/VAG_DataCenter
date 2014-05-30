<?php
/* @var $this OrthosisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orthosises',
);

$this->menu=array(
	array('label'=>'Create Orthosis', 'url'=>array('create')),
	array('label'=>'Manage Orthosis', 'url'=>array('admin')),
);
?>

<h1>Orthosises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
