<?php

/**
 * This is the model class for table "PossibleDiagnosis".
 *
 * The followings are the available columns in table 'PossibleDiagnosis':
 * @property integer $idPossibleDiagnosis
 * @property string $Code
 * @property string $Letter
 * @property string $Arabic
 * @property string $Roman
 * @property string $Location
 *
 * The followings are the available model relations:
 * @property Diagnosis[] $diagnosises
 */
class PossibleDiagnosis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'PossibleDiagnosis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Code, Letter, Arabic', 'required'),
			array('Code', 'length', 'max'=>10),
			array('Letter', 'length', 'max'=>1),
			array('Arabic', 'length', 'max'=>2),
			array('Roman, Location', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPossibleDiagnosis, Code, Letter, Arabic, Roman, Location', 'safe', 'on'=>'search'),
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
			'diagnosises' => array(self::MANY_MANY, 'Diagnosis', 'Diagnosis_has_PossibleDiagnosis(PossibleDiagnosis_idPossibleDiagnosis, Diagnosis_idDiagnosis)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPossibleDiagnosis' => 'Id Possible Diagnosis',
			'Code' => 'Code',
			'Letter' => 'Letter',
			'Arabic' => 'Arabic',
			'Roman' => 'Roman',
			'Location' => 'Location',
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

		$criteria->compare('idPossibleDiagnosis',$this->idPossibleDiagnosis);
		$criteria->compare('Code',$this->Code,true);
		$criteria->compare('Letter',$this->Letter,true);
		$criteria->compare('Arabic',$this->Arabic,true);
		$criteria->compare('Roman',$this->Roman,true);
		$criteria->compare('Location',$this->Location,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PossibleDiagnosis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
