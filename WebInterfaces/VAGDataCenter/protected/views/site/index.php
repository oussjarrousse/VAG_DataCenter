<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>
<p>Just to test<br />
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'companies', 'url'=>array('/companies')),
				array('label'=>'company', 'url'=>array('/company')),
				array('label'=>'orthosis', 'url'=>array('/orthosis')),
				array('label'=>'protocols', 'url'=>array('/protocols')),
				array('label'=>'sensors', 'url'=>array('/sensors')),
			),
		)); ?></p>
