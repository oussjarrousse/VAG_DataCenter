<?php

/**
 * This is the model class for table "PatientsSecret"
 *
 * The followings are the available columns in table 'PatientsSecret':
 * @property string $idPatientsSecret
 * @property string $firstname
 * @property string $lastname
 * @property string $birthdate
 * @property string $md5
 * @property integer $gender
 *
 * The followings are the available model relations:
 * @property PatientsEmails[] $patientsEmails
 * @property PatientsPhones[] $patientsPhones
 */
class PatientsSecret extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'PatientsSecret';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstname, lastname, birthdate, md5, gender', 'required'),
			array('gender', 'numerical', 'integerOnly'=>true, 'min'=>0,'max'=>1),
			array('firstname, lastname', 'length', 'max'=>45),
			array('firstname, lastname', 'filter', 'filter'=>'trim'),
			array('firstname, lastname', 'filter', 'filter'=>'strip_tags'),
			array('birthdate','date','format'=>'yyyy-MM-dd'),//MySQL like format
			array('md5', 'length', 'max'=>32),
			array('gender', 'numerical', 'integerOnly'=>true, 'min'=>0, 'max'=>1),
			array('md5','unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPatientsSecret, firstname, lastname, birthdate, md5, gender', 'safe', 'on'=>'search'),
		);
	}
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
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'patientsEmails' => array(self::HAS_MANY, 'PatientsEmails', 'Patients_idPatients'),
			'patientsPhones' => array(self::HAS_MANY, 'PatientsPhones', 'Patients_idPatients'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPatientsSecret' => 'Id Patients Secret',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'birthdate' => 'Birthdate',
			'md5' => 'Md5',
			'gender' => 'Gender',
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

		$criteria->compare('idPatientsSecret',$this->idPatientsSecret,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('md5',$this->md5,true);
		$criteria->compare('gender',$this->gender);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->dbSecret;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PatientsSecret the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
