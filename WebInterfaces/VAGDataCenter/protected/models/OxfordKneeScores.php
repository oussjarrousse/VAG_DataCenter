<?php

/**
 * This is the model class for table "OxfordKneeScores".
 *
 * The followings are the available columns in table 'OxfordKneeScores':
 * @property string $idPatientsOxfordScores
 * @property integer $Scope 
 * @property integer $Q1
 * @property integer $Q2
 * @property integer $Q3
 * @property integer $Q4
 * @property integer $Q5
 * @property integer $Q6
 * @property integer $Q7
 * @property integer $Q8
 * @property integer $Q9
 * @property integer $Q10
 * @property integer $Q11
 * @property integer $Q12
 * @property string $Patients_idPatients
 * @property string $Sessions_idSession
 *
 * The followings are the available model relations:
 * @property Sessions $sessionsIdSession
 * @property Patients $patientsIdPatients
 */
class OxfordKneeScores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'OxfordKneeScores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Scope, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Patients_idPatients, Sessions_idSession', 'required'),
			array('Scope, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12', 'numerical', 'integerOnly'=>true),
			array('Scope', 'numerical' ,'min'=>0,'max'=>2),
			array('Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12', 'numerical', 'min'=>1, 'max'=>5),
			array('Patients_idPatients, Sessions_idSession', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPatientsOxfordScores, Scope, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Patients_idPatients, Sessions_idSession', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'sessionsIdSession' => array(self::BELONGS_TO, 'Sessions', 'Sessions_idSession'),
			'patientsIdPatients' => array(self::BELONGS_TO, 'Patients', 'Patients_idPatients'),
		);
	}
	
	protected function beforeValidate ()
	{
		//make sure the patientID corresponds to the sessionID
		$this->Patients_idPatients = $this->sessionsIdSession->Patients_idPatients;
		return parent::beforeValidate ();
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPatientsOxfordScores' => 'Id Patients Oxford Scores',
			'Scope' => 'Left Knee, Right Knee, Both',
			'Q1' => '1. How would you describe the pain you usually have from your knee?',
			'Q2' => '2. Have you had any trouble with washing and drying yourself (all over) because of your knee?',
			'Q3' => '3. Have you had any trouble getting in and out of a car or using public transport because of your knee? (whichever you tend to use)',
			'Q4' => '4. For how long have you been able to walk before pain from your knee becomes severe? (with or without a stick)',
			'Q5' => '5. After a meal (sat at a table), how painful has it been for you to stand up from a chair because of your knee?',
			'Q6' => '6. Have you been limping when walking, because of your knee?',
			'Q7' => '7. Could you kneel down and get up again afterwards?',
			'Q8' => '8. Have you been troubled by pain from your knee in bed at night?',
			'Q9' => '9. How much has pain from your knee interfered with your usual work (including housework)?',
			'Q10' => '10. Have you felt that your knee might suddenly \'give way\' or let you down?',
			'Q11' => '11. Could you do the household shopping on your own?',
			'Q12' => '12. Could you walk down one flight of stairs?',
			'Patients_idPatients' => 'Patient',
			'Sessions_idSession' => 'Session',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idPatientsOxfordScores',$this->idPatientsOxfordScores,true);
		$criteria->compare('Scope',$this->Scope);
		$criteria->compare('Q1',$this->Q1);
		$criteria->compare('Q2',$this->Q2);
		$criteria->compare('Q3',$this->Q3);
		$criteria->compare('Q4',$this->Q4);
		$criteria->compare('Q5',$this->Q5);
		$criteria->compare('Q6',$this->Q6);
		$criteria->compare('Q7',$this->Q7);
		$criteria->compare('Q8',$this->Q8);
		$criteria->compare('Q9',$this->Q9);
		$criteria->compare('Q10',$this->Q10);
		$criteria->compare('Q11',$this->Q11);
		$criteria->compare('Q12',$this->Q12);
		$criteria->compare('Patients_idPatients',$this->Patients_idPatients,true);
		$criteria->compare('Sessions_idSession',$this->Sessions_idSession,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function answersLabels()
	{
		return array(
				'Scope_Left' => 'Left',
				'Scope_Right' => 'Right',
				'Scope_Both'=> 'Both',
				'Q1_1' => 'None',
				'Q1_2' => 'Very mild',
				'Q1_3' => 'Mild',
				'Q1_4' => 'Moderate',
				'Q1_5' => 'Severe',
	
				'Q2_1' => 'No trouble at all',
				'Q2_2' => 'Very little trouble',
				'Q2_3' => 'Moderate trouble',
				'Q2_4' => 'Extreme difficulty',
				'Q2_5' => 'Impossible to do',
	
				'Q3_1' => 'No trouble at all',
				'Q3_2' => 'Very little trouble',
				'Q3_3' => 'Moderate trouble',
				'Q3_4' => 'Extreme difficulty',
				'Q3_5' => 'Impossible to do',
	
				'Q4_1' => 'No pain/more 30 Minutes',
				'Q4_2' => '16 to 30 minutes',
				'Q4_3' => '5 to 15 minutes',
				'Q4_4' => 'Around the house only',
				'Q4_5' => 'Not at all/pain severe when walking',
	
				'Q5_1' => 'Not at all painful',
				'Q5_2' => 'Slightly painful',
				'Q5_3' => 'Moderately painful',
				'Q5_4' => 'Very painful',
				'Q5_5' => 'Unberable',
	
				'Q6_1' => 'Rarely/never',
				'Q6_2' => 'Sometimes or just at first',
				'Q6_3' => 'Often, not just at first',
				'Q6_4' => 'Most of the time',
				'Q6_5' => 'All of the ',
	
				'Q7_1' => 'Yes, easily',
				'Q7_2' => 'With little difficulty',
				'Q7_3' => 'With moderate difficulty',
				'Q7_4' => 'With extreme difficulty',
				'Q7_5' => 'No, impossible',
	
				'Q8_1' => 'No nights',
				'Q8_2' => 'Only 1 or 2 nights',
				'Q8_3' => 'Some nights',
				'Q8_4' => 'Most nights',
				'Q8_5' => 'Every night',
	
				'Q9_1' => 'Not at all',
				'Q9_2' => 'A little bit',
				'Q9_3' => 'Moderately',
				'Q9_4' => 'Greatly',
				'Q9_5' => 'Totally',
	
				'Q10_1' => 'Rarely/never',
				'Q10_2' => 'Sometimes or just at first',
				'Q10_3' => 'Often, not just at first',
				'Q10_4' => 'Most of the time',
				'Q10_5' => 'All of the ',
	
				'Q11_1' => 'Yes, easily',
				'Q11_2' => 'With little difficulty',
				'Q11_3' => 'With moderate difficulty',
				'Q11_4' => 'With extreme difficulty',
				'Q11_5' => 'No, impossible',
	
				'Q12_1' => 'Yes, easily',
				'Q12_2' => 'With little difficulty',
				'Q12_3' => 'With moderate difficulty',
				'Q12_4' => 'With extreme difficulty',
				'Q12_5' => 'No, impossible',
		);
	}
	
	public function Score()
	{
		$sum = $this->Q1 +
		$this->Q2 +
		$this->Q3 +
		$this->Q4 +
		$this->Q5 +
		$this->Q6 +
		$this->Q7 +
		$this->Q8 +
		$this->Q9 +
		$this->Q10 +
		$this->Q11 +
		$this->Q12;
		return $sum;
	}
	
	public function getSessionsOptions()
	{
		return CHtml::listData(Sessions::model()->findAll(), 'idSession', 'sessionName');
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OxfordKneeScores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
