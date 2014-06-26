<!-- 
<?php
/* @var $this PatientsSecretController */
/* @var $model PatientsSecret */

$this->breadcrumbs=array(
	'Create',
);

$this->menu=array(
//	array('label'=>'List PatientsSecret', 'url'=>array('index')),
//	array('label'=>'Manage PatientsSecret', 'url'=>array('admin')),
);
?>
 -->
<h1>New Patient</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>