<?php

/**
 * This is the model class for table "ONNForm".
 *
 * The followings are the available columns in table 'ONNForm':
 * @property string $idONNForm
 * @property double $weight
 * @property string $height
 * @property string $Patients_idPatients
 * @property string $Sessions_idSession
 * @property string $complaintsDate
 * @property string $complaintsCause
 * @property string $natureOfWork
 * @property string $sportActivities
 * @property string $diagnosis
 *
 * The followings are the available model relations:
 * @property Patients $patientsIdPatients
 * @property Sessions $sessionsIdSession
 */
class ONNForm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ONNForm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('weight, height, Patients_idPatients, Sessions_idSession, complaintsDate', 'required'),
			array('weight, height', 'numerical'),
			array('height, weight, Patients_idPatients, Sessions_idSession', 'length', 'max'=>10),
			array('complaintsCause, natureOfWork, sportActivities, diagnosis', 'length', 'max'=>45),
			array('complaintsDate','date','format'=>'yyyy-MM-dd'),//MySQL like format
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idONNForm, weight, height, Patients_idPatients, Sessions_idSession, complaintsDate, complaintsCause, natureOfWork, sportActivities, diagnosis', 'safe', 'on'=>'search'),
		);
	}
	protected function afterFind ()
	{
		// convert to display format
		$this->complaintsDate = strtotime ($this->complaintsDate);
		$this->complaintsDate = date('d.m.Y', $this->complaintsDate);
		parent::afterFind ();
	}
	protected function beforeValidate ()
	{
		// convert to storage format
		$this->complaintsDate = strtotime ($this->complaintsDate);
		$this->complaintsDate = date ('Y-m-d', $this->complaintsDate);
		return parent::beforeValidate ();
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
			'sessionsIdSession' => array(self::BELONGS_TO, 'Sessions', 'Sessions_idSession'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idONNForm' => 'ONN form ID',
			'weight' => 'Weight',
			'height' => 'Height',
			'Patients_idPatients' => 'Patients Id Patients',
			'Sessions_idSession' => 'Sessions Id Session',
			'complaintsDate' => 'Complaints Date',
			'complaintsCause' => 'Complaints Cause',
			'natureOfWork' => 'Nature Of Work',
			'sportActivities' => 'Sport Activities',
			'diagnosis' => 'Diagnosis',
		);
	}
	
	public function BMI()
	{
		return 10000*$this->weight/($this->height*$this->height);
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

		$criteria->compare('idONNForm',$this->idONNForm,true);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('height',$this->height,true);
		$criteria->compare('Patients_idPatients',$this->Patients_idPatients,true);
		$criteria->compare('Sessions_idSession',$this->Sessions_idSession,true);
		$criteria->compare('complaintsDate',$this->complaintsDate,true);
		$criteria->compare('complaintsCause',$this->complaintsCause,true);
		$criteria->compare('natureOfWork',$this->natureOfWork,true);
		$criteria->compare('sportActivities',$this->sportActivities,true);
		$criteria->compare('diagnosis',$this->diagnosis,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ONNForm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
