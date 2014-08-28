<?php
/* @var $this SessionsController */
/* @var $browse */

$this->breadcrumbs=array(
	'Sessions',
);

$this->menu=array(
	array('label'=>'List All Sessions', 'url'=>array('index')),
	array('label'=>'Import Sessions', 'url'=>array('import')),
	array('label'=>'Manage Sessions', 'url'=>array('admin')),
);
?>
<h1>Index of: <?php echo (empty($dir)?'/':$dir); ?> on the the server</h1>


<?php if(Yii::app()->user->hasFlash('error.patient.not.fount')):?>
<div>
	<?php echo Yii::app()->user->getFlash('error.patient.not.fount'); ?>
	<?php echo CHtml::link('Click here to add the patient:'.$patientMD5Hash.' to the Database first!',array(
													'patientsSecret/create',
													'patientMD5Hash'=>$patientMD5Hash
					));
	echo '<br></br>';
	?>
	<br>
</div>
<?php endif;?>

<?php 
	if(Yii::app()->user->hasFlash('error.save.failed'))
	{
		echo '<div class="alert.error.save.failed">';
		echo Yii::app()->user->getFlash('error.save.failed');
		echo '<br></br>';
		echo '</div>';
	}
?>

<?php if ($importable): ?>
<div>
	<?php echo 'Folder contains xml files, '. CHtml::link('click here to Import the entire session',array(
													'sessions/importSession',
													'dir'=>$dir
												)); 
	?>
</div>
<?php endif; ?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
	'hideHeader'=>true,
	'columns'=>array(
		array(
			'type'=>'raw',
			'name'=>'Image',
			'value'=>'CHtml::image(Yii::app()->request->baseUrl.(($data["image"]=="0")?"/images/folder-icon.png":"/images/xml-file-icon.png"),"", array("width"=>"16px" ,"height"=>"16px"))',
			'htmlOptions'=>array('width'=>'16px'),
			//'value'=>'CHtml::image("images/folder-icon.png")',
		),
		array(
			'type'=>'raw',
			'name'=>'path',
			//'value'=>'CHtml::link($data["link"]?$data["dir"],array($data["action"],"dir"=>$data["get"]):$data["dir"],array($data["action"],"dir"=>$data["get"]))',
			'value'=>'$data["link"]?CHtml::link($data["dir"],array($data["action"],"dir"=>$data["get"])):$data["dir"]',
			'htmlOptions'=>array('text-align'=>'left'),
		),
		/*
		array(
			'Class'=>'CCheckBoxColumn',

		),
		//*/
		/*
		array(
			'class'=>'CLinkColumn',
			'label'=>'Import',
			'htmlOptions'=>array('width'=>'16px'),
			//'template'=>'{view}',
			//'value'=>'CHtml::link($data["dir"],array($data["action"],"dir"=>$data["get"]))',
		),
		//*/
	),
));
?>