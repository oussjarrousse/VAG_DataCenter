<?php
/* @var $this SessionsController */
/* @var $browse */

$this->breadcrumbs=array(
	'Sessions',
);

$this->menu=array(
	array('label'=>'Import Session', 'url'=>array('import')),
	array('label'=>'Manage Sessions', 'url'=>array('admin')),
);
?>
<h1>Index of: <?php echo (empty($dir)?'/':$dir); ?> on the the server</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
	'hideHeader'=>true,
	'template'=>"{items}",
	'columns'=>array(
		array(
			'type'=>'raw',
			'name'=>'image',
			'value'=>'CHtml::image(Yii::app()->request->baseUrl.(($data["image"]=="0")?"/images/folder-icon.png":"/images/xml-file-icon.png"),"", array("width"=>"16px" ,"height"=>"16px"))',
			'htmlOptions'=>array('width'=>'16px'),
			//'value'=>'CHtml::image("images/folder-icon.png")',
		),
		array(
			'type'=>'raw',
			'name'=>'path',
			'value'=>'CHtml::link($data["dir"],array($data["action"],"dir"=>$data["get"]))',
			'htmlOptions'=>array('text-align'=>'left'),
		),
	),
));
?>