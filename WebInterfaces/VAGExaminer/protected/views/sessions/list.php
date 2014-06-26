<?php
/* @var $this SessionsController */
/* @var $dataProvider CActiveDataProvider */
/* @var $renderedPatientView HTML string */

$this->breadcrumbs=array(
		'Sessions',
);

$this->menu=array(
		array('label'=>'New Session', 'url'=>array('create')),
);
?>

<?php echo $renderedPatientView; ?>
<br>

<h2>Patient Sessions</h2>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns' => array(
			array(
				'name'=>'Examiner', 'value'=>'$data->systemUsers->firstname." ".$data->systemUsers->lastname'
			),
			'timestamp',
			array(
				'class'=>'CButtonColumn',
				'template'=>'{view}',
				'buttons'=>array(
					'view'=> array(
						'imageUrl' => false,
					)
				)
			),
		),
	)
); ?>
