<?php

/**
 * This is the model class for table "Sensors".
 *
 * The followings are the available columns in table 'Sensors':
 * @property string $idSensors
 * @property string $name
 * @property string $type
 * @property string $descriptions
 * @property string $Company_idCompany
 *
 * The followings are the available model relations:
 * @property Company $companyIdCompany
 * @property SignalAcquisition[] $signalAcquisitions
 */
class Sensors extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Sensors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, type, descriptions, Company_idCompany', 'required'),
			array('name, type', 'length', 'max'=>45),
			array('descriptions', 'length', 'max'=>256),
			array('name, type, descriptions', 'filter', 'filter'=>'trim'),
			array('name, type, descriptions', 'filter', 'filter'=>'strip_tags'),
			array('Company_idCompany', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idSensors, name, type, descriptions, Company_idCompany', 'safe', 'on'=>'search'),
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
			'companyIdCompany' => array(self::BELONGS_TO, 'Company', 'Company_idCompany'),
			'signalAcquisitions' => array(self::HAS_MANY, 'SignalAcquisition', 'Sensors_idSensors'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSensors' => 'Id Sensors',
			'name' => 'Name',
			'type' => 'Type',
			'descriptions' => 'Descriptions',
			'Company_idCompany' => 'Company Id Company',
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

		$criteria->compare('idSensors',$this->idSensors,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('descriptions',$this->descriptions,true);
		$criteria->compare('Company_idCompany',$this->Company_idCompany,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sensors the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
