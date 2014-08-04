<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="shortcut icon" href="favicon.ico">
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript">
	var d = document;
var safari = (navigator.userAgent.toLowerCase().indexOf('safari') != -1) ? true : false;
var gebtn = function(parEl,child) { return parEl.getElementsByTagName(child); };
onload = function() {
    
    var body = gebtn(d,'body')[0];
    body.className = body.className && body.className != '' ? body.className + ' has-js' : 'has-js';
    
    if (!d.getElementById || !d.createTextNode) return;
    var ls = gebtn(d,'label');
    for (var i = 0; i < ls.length; i++) {
        var l = ls[i];
        if (l.className.indexOf('label_') == -1) continue;
        var inp = gebtn(l,'input')[0];
        if (l.className == 'label_check') {
            l.className = (safari && inp.checked == true || inp.checked) ? 'label_check c_on' : 'label_check c_off';
            l.onclick = check_it;
        };
        if (l.className == 'label_radio') {
            l.className = (safari && inp.checked == true || inp.checked) ? 'label_radio r_on' : 'label_radio r_off';
            l.onclick = turn_radio;
        };
    };
};
var check_it = function() {
    var inp = gebtn(this,'input')[0];
    if (this.className == 'label_check c_off' || (!safari && inp.checked)) {
        this.className = 'label_check c_on';
        if (safari) inp.click();
    } else {
        this.className = 'label_check c_off';
        if (safari) inp.click();
    };
};
var turn_radio = function() {
    var inp = gebtn(this,'input')[0];
    if (this.className == 'label_radio r_off' || inp.checked) {
        var ls = gebtn(this.parentNode,'label');
        for (var i = 0; i < ls.length; i++) {
            var l = ls[i];
            if (l.className.indexOf('label_radio') == -1)  continue;
            l.className = 'label_radio r_off';
        };
        this.className = 'label_radio r_on';
        if (safari) inp.click();
    } else {
        this.className = 'label_radio r_off';
        if (safari) inp.click();
    };
};
	</script>
</head>

<body>
<div id="wrap">
	<div id="main">

		<div class="header">
			<h1 class="title"><?php echo CHtml::encode(Yii::app()->name); ?></h1>
		</div><!-- header -->

		<div class="content">

			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'homeLink'=>CHtml::link('Search Patient', array('/site/index')),
				'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>

			<?php echo $content; ?>

			<div class="clear"></div>

			<div id="footer">
				Copyright &copy; <?php echo date('Y'); ?>.<br/> 
				Munich Innovation Group GmbH<br/>
				All Rights Reserved.
			</div>

		</div><!-- container -->
	</div><!-- page -->
</div><!-- wrap -->

<div id="sidebar">
	<div class="header">
		<p class="title">Menu</p>
	</div><!--header-->
			
	<div class="content">
		<ul class="nav">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
				array('label'=>'Search Patient', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Oxford Knee', 'url'=>array('/oxfordKneeScores/index')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
			)); ?>
			<?php
				$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
				));
				$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
				));
				$this->endWidget();
			?>
		</ul>
	</div>
</div><!-- sidebar menu -->
</body>
</html>
