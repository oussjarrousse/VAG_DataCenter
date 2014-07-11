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
<<<<<<< HEAD
				'name'=>'Session Number', 'value'=>'$data->idSession'
			),
			'timestamp',
			array(
				'name'=>'Examiner', 'value'=>'$data->systemUsers->firstname." ".$data->systemUsers->lastname'
			),
=======
				'name'=>'Examiner', 'value'=>'$data->systemUsers->firstname." ".$data->systemUsers->lastname'
			),
			'timestamp',
>>>>>>> 7c2ac12422d3545e3df8c468e91e69b024f4993b
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
