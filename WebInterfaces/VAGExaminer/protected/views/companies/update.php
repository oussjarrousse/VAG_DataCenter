<?php
/* @var $this CompaniesController */
/* @var $model Companies */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->name=>array('view','id'=>$model->idCompanies),
	'Update',
);

$this->menu=array(
	array('label'=>'List Companies', 'url'=>array('index')),
	array('label'=>'Create Companies', 'url'=>array('create')),
	array('label'=>'View Companies', 'url'=>array('view', 'id'=>$model->idCompanies)),
	array('label'=>'Manage Companies', 'url'=>array('admin')),
);
?>

<h1>Update Companies <?php echo $model->idCompanies; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>