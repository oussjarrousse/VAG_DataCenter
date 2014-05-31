<?php

/**
 * This is the model class for table "Companies".
 *
 * The followings are the available columns in table 'Companies':
 * @property string $idCompanies
 * @property string $name
 * @property string $website
 * @property string $descriptions
 *
 * The followings are the available model relations:
 * @property Orthosis[] $orthosises
 * @property Sensors[] $sensors
 * @property SignalConditioners[] $signalConditioners
 */
class Companies extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'Companies';
	}
	
	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (
				array (
						'name, website, descriptions',
						'required' 
				),
				array (
						'name, website',
						'length',
						'max' => 45 
				),
				array (
						'descriptions',
						'length',
						'max' => 256 
				),
				array (
						'name, website, descriptions',
						'filter',
						'filter' => 'trim' 
				),
				array (
						'name, website, descriptions',
						'filter',
						'filter' => 'strip_tags' 
				),
				array (
						'website',
						'url' 
				),
				// The following rule is used by search().
				// @todo Please remove those attributes that should not be searched.
				array (
						'idCompanies, name, website, descriptions',
						'safe',
						'on' => 'search' 
				) 
		);
	}
	
	/**
	 *
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array (
				'orthosises' => array (
						self::HAS_MANY,
						'Orthosis',
						'Companies_idCompanies' 
				),
				'sensors' => array (
						self::HAS_MANY,
						'Sensors',
						'Companies_idCompanies' 
				),
				'signalConditioners' => array (
						self::HAS_MANY,
						'SignalConditioners',
						'Companies_idCompanies' 
				) 
		);
	}
	
	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array (
				'idCompanies' => 'Id Companies',
				'name' => 'Name',
				'website' => 'Website',
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
	 *         based on the search/filter conditions.
	 */
	public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.
		$criteria = new CDbCriteria ();
		
		$criteria->compare ( 'idCompanies', $this->idCompanies, true );
		$criteria->compare ( 'name', $this->name, true );
		$criteria->compare ( 'website', $this->website, true );
		$criteria->compare ( 'descriptions', $this->descriptions, true );
		
		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return Companies the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
