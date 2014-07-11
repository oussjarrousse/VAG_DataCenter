<?php

/**
 * This is the model class for table "SignalAcquisition".
 *
 * The followings are the available columns in table 'SignalAcquisition':
 * @property string $idSignalAcquisition
 * @property string $Patients_idPatients
 * @property string $Sessions_idSession
 * @property integer $knee
 * @property integer $position
 * @property string $Sensors_idSensors
 * @property string $Protocols_idProtocols
 * @property string $SignalConditioners_idSignalConditioners
 * @property string $Orthosis_idOrthosis
 * @property double $samplesRate
 * @property integer $bitsPerSample
 * @property string $startTime
 * @property string $endTime
 * @property string $filename
 *
 * The followings are the available model relations:
 * @property Sensors $sensorsIdSensors
 * @property Protocols $protocolsIdProtocols
 * @property SignalConditioners $signalConditionersIdSignalConditioners
 * @property Patients $patientsIdPatients
 * @property Sessions $sessionsIdSession
 * @property Orthosis $orthosisIdOrthosis
 */
class SignalAcquisition extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'SignalAcquisition';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Patients_idPatients, Sessions_idSession, knee, position, Sensors_idSensors, Protocols_idProtocols, SignalConditioners_idSignalConditioners, Orthosis_idOrthosis, samplesRate, bitsPerSample, startTime, endTime, filename', 'required'),
			array('knee, bitsPerSample, samplesRate', 'numerical', 'integerOnly'=>true),
			//0 = Left, 1 = Right
			array('knee','numerical','min'=>0, 'max'=>1),
			array('position','numerical','min'=>0, 'max'=>2),
			array('Patients_idPatients, Sessions_idSession, Sensors_idSensors, Protocols_idProtocols, SignalConditioners_idSignalConditioners, Orthosis_idOrthosis', 'length', 'max'=>10),
			array('filename', 'length', 'max'=>2048),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idSignalAcquisition, Patients_idPatients, Sessions_idSession, Sensors_idSensors, Protocols_idProtocols, SignalConditioners_idSignalConditioners, Orthosis_idOrthosis, startTime, endTime, knee, position, bitsPerSample, filename, samplesRate', 'safe', 'on'=>'search'),
		);
	}
	/*
	protected function afterFind ()
	{
		// convert to display format
		$this->birthdate = strtotime ($this->birthdate);
		$this->birthdate = date('d.m.Y', $this->birthdate);
		parent::afterFind ();
	}
	protected function beforeValidate ()
	{
		// convert to storage format
		$this->birthdate = strtotime ($this->birthdate);
		$this->birthdate = date ('Y-m-d', $this->birthdate);
		return parent::beforeValidate ();
	}
	public function beforeSave()
	{
		if ($this->isNewRecord)
			$this->timestamp = new CDbExpression('NOW()');
		return parent::beforeSave();
	}
	//*/
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'orthosisIdOrthosis' => array(self::BELONGS_TO, 'Orthosis', 'Orthosis_idOrthosis'),
			'patientsIdPatients' => array(self::BELONGS_TO, 'Patients', 'Patients_idPatients'),
			'sessionsIdSession' => array(self::BELONGS_TO, 'Sessions', 'Sessions_idSession'),
			'protocolsIdProtocols' => array(self::BELONGS_TO, 'Protocols', 'Protocols_idProtocols'),
			'sensorsIdSensors' => array(self::BELONGS_TO, 'Sensors', 'Sensors_idSensors'),
			'signalConditionersIdSignalConditioners' => array(self::BELONGS_TO, 'SignalConditioners', 'SignalConditioners_idSignalConditioners'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSignalAcquisition' => 'Id Signal Acquisition',
			'Patients_idPatients' => 'Patients Id Patients',
			'Sessions_idSession' => 'Sessions Id Session',
			'knee' => 'Knee',
			'position' => 'Position',
			'Sensors_idSensors' => 'Sensors Id Sensors',
			'Protocols_idProtocols' => 'Protocols Id Protocols',
			'SignalConditioners_idSignalConditioners' => 'Signal Conditioners Id Signal Conditioners',
			'Orthosis_idOrthosis' => 'Orthosis Id Orthosis',
			'samplesRate' => 'Samples Rate (Sample/Second)',
			'bitsPerSample' => 'Bits Per Sample',
			'startTime' => 'Start Time',
			'endTime' => 'End Time',
			'filename' => 'Filename',
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

		$criteria->compare('idSignalAcquisition',$this->idSignalAcquisition,true);
		$criteria->compare('Patients_idPatients',$this->Patients_idPatients,true);
		$criteria->compare('Sessions_idSession',$this->Sessions_idSession,true);
		$criteria->compare('knee',$this->knee);
		$criteria->compare('position',$this->position);
		$criteria->compare('Sensors_idSensors',$this->Sensors_idSensors,true);
		$criteria->compare('Protocols_idProtocols',$this->Protocols_idProtocols,true);
		$criteria->compare('SignalConditioners_idSignalConditioners',$this->SignalConditioners_idSignalConditioners,true);
		$criteria->compare('Orthosis_idOrthosis',$this->Orthosis_idOrthosis,true);
		$criteria->compare('samplesRate',$this->samplesRate);
		$criteria->compare('bitsPerSample',$this->bitsPerSample);
		$criteria->compare('startTime',$this->startTime,true);
		$criteria->compare('endTime',$this->endTime,true);
		$criteria->compare('filename',$this->filename,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SignalAcquisition the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
