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
	array('label'=>'Add New Company', 'url'=>array('create')),
	array('label'=>'View Company', 'url'=>array('view', 'id'=>$model->idCompanies)),
	array('label'=>'Manage Companies', 'url'=>array('admin')),
);
?>

<h1>Update Company #<?php echo $model->idCompanies; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>