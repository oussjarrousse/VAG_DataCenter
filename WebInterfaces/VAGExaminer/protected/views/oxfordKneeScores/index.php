<?php
/* @var $this OxfordKneeScoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Oxford Knee Scores',
);

$this->menu=array(
//	array('label'=>'Create OxfordKneeScores', 'url'=>array('create')),
//	array('label'=>'Manage OxfordKneeScores', 'url'=>array('admin')),
);
?>
<script type="text/javascript">
	var urchinTracker=function(){},_gaq={push:function(){try {if(arguments[0][0]=='_link')window.location.href=arguments[0][1]}catch(er){}}},_gat={_createTracker:function(){}, _getTracker:function(){return{__noSuchMethod__:function(){},_link:function(o){if(o)location.href=o;},_linkByPost:function(){return true;},_getLinkerUrl:function(o){return o;},_trackEvent:function(){}}}};
</script>
<h1>Oxford Knee Scores</h1>
<div class="quest"><form>
<p>1. During the past 4 weeks...<br />
How would you describe the pain you usually have from your knee?<br />
<fieldset class="radios">
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="1-1" />None</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="1-2" />Very mild</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="1-3" />Mild</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="1-4" />Moderate</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="1-4" />Severe</label>
</fieldset>
</p>
<p>2. During the past 4 weeks...<br />
Have you had any trouble with washing and drying yourself (all over) because of your knee?<br />
<fieldset class="radios">
	<label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-1" />No trouble at all</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-2" />Very little trouble</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-3" />Moderate trouble</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-4" />Extreme difficulty</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-4" />Impossible to do</label>
</fieldset>
</p>
<p>3. During the past 4 weeks...<br />
Have you had any trouble getting in and out of a car or using public transport because of your knee? (whichever you tend to use)<br />
<fieldset class="radios">
	<label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="3-1" />No trouble at all</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="3-2" />Very little trouble</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-3" />Moderate trouble</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-4" />Extreme difficulty</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-4" />Impossible to do</label>
</fieldset>
</p>
<p>4. During the past 4 weeks...<br />
For how long have you been able to walk before pain from your knee becomes severe? (with or without a stick)<br />
 |  |  |  | 
<fieldset class="radios">
	<label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="4-1" />No pain/More minutes</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="4-2" />16 to 30 minutes</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="4-3" />5 to 15 minutes</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="4-4" />Around the house only</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="4-4" />Not at all/pain severe when walking</label>
</fieldset>
</p>
<p>5. During the past 4 weeks...<br />
After a meal (sat at a table), how painful has it been for you to stand up from a chair because of your knee?<br />
<fieldset class="radios">
	<label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="5-1" />Not at all painful</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="5-2" />Slightly painful</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-1" />Moderately painful</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-2" />Very painful</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-2" />Unbearable</label>

</fieldset>
</p>
<p>6. During the past 4 weeks...<br />
Have you been limping when walking, because of your knee?<br />
<fieldset class="radios">
	<label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="6-1" />Rarely/never</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="6-2" />Sometimes, or just at first</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-1" />Often, not just at first</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-2" />Most of the time</label>
    <label class="label_radio" for="sample-check">
    <input type="radio" name="aGroup" value="2-2" />All of the time</label>
</fieldset>
</p>
<p>Thank you very much.</p>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>
</form>
</div>

<p><?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?></p>