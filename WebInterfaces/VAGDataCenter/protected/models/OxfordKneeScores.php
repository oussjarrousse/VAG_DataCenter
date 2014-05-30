<?php

/**
 * This is the model class for table "OxfordKneeScores".
 *
 * The followings are the available columns in table 'OxfordKneeScores':
 * @property string $idPatientsOxfordScores
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
			array('Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Patients_idPatients, Sessions_idSession', 'required'),
			array('Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12', 'numerical', 'integerOnly'=>true),
			array('Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12', 'numerical', 'min'=>1, 'max'=>5),
			array('Patients_idPatients, Sessions_idSession', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPatientsOxfordScores, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Patients_idPatients, Sessions_idSession', 'safe', 'on'=>'search'),
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

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPatientsOxfordScores' => 'Id Patients Oxford Scores',
			'Q1' => 'Q1',
			'Q2' => 'Q2',
			'Q3' => 'Q3',
			'Q4' => 'Q4',
			'Q5' => 'Q5',
			'Q6' => 'Q6',
			'Q7' => 'Q7',
			'Q8' => 'Q8',
			'Q9' => 'Q9',
			'Q10' => 'Q10',
			'Q11' => 'Q11',
			'Q12' => 'Q12',
			'Patients_idPatients' => 'Patients Id Patients',
			'Sessions_idSession' => 'Sessions Id Session',
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
