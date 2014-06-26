<?php

/**
 * This is the model class for table "Protocols".
 *
 * The followings are the available columns in table 'Protocols':
 * @property string $idProtocols
 * @property string $name
 * @property string $descriptions
 *
 * The followings are the available model relations:
 * @property SignalAcquisition[] $signalAcquisitions
 */
class Protocols extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Protocols';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, descriptions', 'required'),
			array('name', 'length', 'max'=>45),
			array('descriptions', 'length', 'max'=>256),
			array('name, descriptions', 'filter', 'filter'=>'trim'),
			array('name, descriptions', 'filter', 'filter'=>'strip_tags'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProtocols, name, descriptions', 'safe', 'on'=>'search'),
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
			'signalAcquisitions' => array(self::HAS_MANY, 'SignalAcquisition', 'Protocols_idProtocols'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProtocols' => 'Id Protocols',
			'name' => 'Name',
			'descriptions' => 'Descriptions',
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

		$criteria->compare('idProtocols',$this->idProtocols,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('descriptions',$this->descriptions,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Protocols the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
