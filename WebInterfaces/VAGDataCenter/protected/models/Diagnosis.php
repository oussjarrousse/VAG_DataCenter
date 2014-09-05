<?php

/**
 * This is the model class for table "Diagnosis".
 *
 * The followings are the available columns in table 'Diagnosis':
 * @property integer $idDiagnosis
 * @property string $date
 * @property string $Patients_idPatients
 *
 * The followings are the available model relations:
 * @property Patients $patientsIdPatients
 * @property PossibleDiagnosis[] $possibleDiagnosises
 */
class Diagnosis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Diagnosis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, Patients_idPatients', 'required'),
			array('Patients_idPatients', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idDiagnosis, date, Patients_idPatients', 'safe', 'on'=>'search'),
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
			'patientsIdPatients' => array(self::BELONGS_TO, 'Patients', 'Patients_idPatients'),
			'possibleDiagnosises' => array(self::MANY_MANY, 'PossibleDiagnosis', 'Diagnosis_has_PossibleDiagnosis(Diagnosis_idDiagnosis, PossibleDiagnosis_idPossibleDiagnosis)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idDiagnosis' => 'Id Diagnosis',
			'date' => 'Date',
			'Patients_idPatients' => 'Patients Id Patients',
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

		$criteria->compare('idDiagnosis',$this->idDiagnosis);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('Patients_idPatients',$this->Patients_idPatients,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Diagnosis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
