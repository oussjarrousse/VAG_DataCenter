<?php
/* @var $this SystemUsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'System Users',
);

$this->menu=array(
	array('label'=>'Add New System User', 'url'=>array('create')),
	array('label'=>'Manage System Users', 'url'=>array('admin')),
);
?>

<h1>System Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
