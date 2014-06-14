<?php
/* @var $this SessionsController */
/* @var $dataProvider CActiveDataProvider */
/* @var $renderedPatientView HTML string */

$this->breadcrumbs=array(
		'Sessions',
);

$this->menu=array(
		array('label'=>'Create Sessions', 'url'=>array('create')),
);
?>

<?php echo $renderedPatientView; ?>
<br>

<h2>Patients Sessions</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
