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

<h1>Oxford Knee Scores</h1>
<div class="quest">
<p>1. During the past 4 weeks...<br />
How would you describe the pain you usually have from your knee?<br />
None | Very mild | Mild | Moderate | Severe
</p>
<p>2. During the past 4 weeks...<br />
Have you had any trouble with washing and drying yourself (all over) because of your knee?<br />
No trouble at all | Very little trouble | Moderate trouble | Extreme difficulty | Impossible to do
</p>
<p>3. During the past 4 weeks...<br />
Have you had any trouble getting in and out of a car or using public transport because of your knee? (whichever you tend to use)<br />
No trouble at all | Very little trouble | Moderate trouble | Extreme difficulty | Impossible to do
</p>
<p>4. During the past 4 weeks...<br />
For how long have you been able to walk before pain from your knee becomes severe? (with or without a stick)<br />
No pain/More minutes | 16 to 30 minutes | 5 to 15 minutes | Around the house only | Not at all/pain severe when walking
</p>
<p>5. During the past 4 weeks...<br />
After a meal (sat at a table), how painful has it been for you to stand up from a chair because of your knee?<br />
Not at all painful | Slightly painful | Moderately painful | Very painful | Unbearable
</p>
<p>6. During the past 4 weeks...<br />
Have you been limping when walking, because of your knee?<br />
Rarely/never | Sometimes, or just at first | Often, not just at first | Most of the time | All of the time
</p>
<p>Finally, please check back that you have answered each question.<br />
Thank you very much.</p>
</div>
<p><?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?></p>

