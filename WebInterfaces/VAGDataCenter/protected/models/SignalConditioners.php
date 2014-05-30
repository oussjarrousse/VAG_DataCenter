<?php

/**
 * This is the model class for table "SignalConditioners".
 *
 * The followings are the available columns in table 'SignalConditioners':
 * @property string $idSignalConditioners
 * @property string $name
 * @property string $descriptions
 * @property string $Company_idCompany
 *
 * The followings are the available model relations:
 * @property SignalAcquisition[] $signalAcquisitions
 * @property Company $companyIdCompany
 */
class SignalConditioners extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'SignalConditioners';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, descriptions, Company_idCompany', 'required'),
			array('name', 'length', 'max'=>45),
			array('descriptions', 'length', 'max'=>256),
			array('name, descriptions', 'filter', 'filter'=>'trim'),
			array('name, descriptions', 'filter', 'filter'=>'strip_tags'),
			array('Company_idCompany', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idSignalConditioners, name, descriptions, Company_idCompany', 'safe', 'on'=>'search'),
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
			'signalAcquisitions' => array(self::HAS_MANY, 'SignalAcquisition', 'SignalConditioners_idSignalConditioners'),
			'companyIdCompany' => array(self::BELONGS_TO, 'Company', 'Company_idCompany'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSignalConditioners' => 'Id Signal Conditioners',
			'name' => 'Name',
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

		$criteria->compare('idSignalConditioners',$this->idSignalConditioners,true);
		$criteria->compare('name',$this->name,true);
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
	 * @return SignalConditioners the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
