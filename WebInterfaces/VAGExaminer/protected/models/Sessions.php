<?php

/**
 * This is the model class for table "Sessions".
 *
 * The followings are the available columns in table 'Sessions':
 * @property string $idSession
 * @property string $timestamp
 * @property string $SystemUsers_idSystemUser
 * @property string $Patients_idPatients
 *
 * The followings are the available model relations:
 * @property MRIDataSets[] $mRIDataSets
 * @property ONNForm[] $oNNForms
 * @property OxfordKneeScores[] $oxfordKneeScores
 * @property Patients $patientsIdPatients
 * @property SystemUsers $systemUsersIdSystemUser
 * @property SignalAcquisition[] $signalAcquisitions
 */
class Sessions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Sessions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('timestamp, SystemUsers_idSystemUser, Patients_idPatients', 'required'),
			//array('SystemUsers_idSystemUser, Patients_idPatients', 'length', 'max'=>10),
			//array('timestamp', 'type', 'type'=>'datetime'),
							
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idSession, timestamp, SystemUsers_idSystemUser, Patients_idPatients', 'safe', 'on'=>'search'),
		);
	}
	
	public function beforeSave() 
	{
		if ($this->isNewRecord)
			$this->timestamp = new CDbExpression('NOW()');
		return parent::beforeSave();
	}
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'mRIDataSets' => array(self::HAS_MANY, 'MRIDataSets', 'Sessions_idSession'),
			'oNNForms' => array(self::HAS_MANY, 'ONNForm', 'Sessions_idSession'),
			'oxfordKneeScores' => array(self::HAS_MANY, 'OxfordKneeScores', 'Sessions_idSession'),
			'signalAcquisitions' => array(self::HAS_MANY, 'SignalAcquisition', 'Sessions_idSession'),	
			'patients' => array(self::BELONGS_TO, 'Patients', 'Patients_idPatients'),
			'systemUsers' => array(self::BELONGS_TO, 'SystemUsers', 'SystemUsers_idSystemUser'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSession' => 'Id Session',
			'timestamp' => 'Timestamp',
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

		$criteria->compare('idSession',$this->idSession,true);
		$criteria->compare('timestamp',$this->timestamp,true);
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
	 * @return Sessions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
