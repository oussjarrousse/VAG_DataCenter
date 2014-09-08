<?php

/**
 * This is the model class for table "Diagnosis".
 *
 * The followings are the available columns in table 'Diagnosis':
 * @property integer $idDiagnosis
 * @property string $date
 * @property integer $knee
 * @property string $notes
 * @property string $authority
 * @property integer $status
 * @property string $SystemUsers_idSystemUser
 * @property string $Patients_idPatients
 *
 * The followings are the available model relations:
 * @property Patients $patientsIdPatients
 * @property SystemUsers $systemUsersIdSystemUser
 * @property Imagine[] $imagines
 * @property PossibleDiagnosis[] $possibleDiagnosises
 */
class Diagnosis extends CActiveRecord
{
	public $selectedPossibleDiagnosis;
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
			array('date, knee, authority, status, SystemUsers_idSystemUser, Patients_idPatients', 'required'),
			array('knee, status', 'numerical', 'integerOnly'=>true),
			array('notes, authority', 'length', 'max'=>45),
			array('SystemUsers_idSystemUser, Patients_idPatients', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idDiagnosis, date, knee, notes, authority, status, SystemUsers_idSystemUser, Patients_idPatients', 'safe', 'on'=>'search'),
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
			'systemUsersIdSystemUser' => array(self::BELONGS_TO, 'SystemUsers', 'SystemUsers_idSystemUser'),
			'imagines' => array(self::MANY_MANY, 'Imagine', 'Diagnosis_has_Imagine(Diagnosis_idDiagnosis, Imagine_idImagine)'),
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
			'knee' => 'Knee',
			'notes' => 'Notes',
			'authority' => 'Authority',
			'status' => 'Status',
			'SystemUsers_idSystemUser' => 'System Users Id System User',
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
		$criteria->compare('knee',$this->knee);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('authority',$this->authority,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('SystemUsers_idSystemUser',$this->SystemUsers_idSystemUser,true);
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
	
	public function getPatientsOptions()
	{
		return CHtml::listData(Patients::model()->findAll(), 'idPatients', 'md5hash');
	}
}
