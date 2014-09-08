<?php

/**
 * This is the model class for table "Diagnosis_has_PossibleDiagnosis".
 *
 * The followings are the available columns in table 'Diagnosis_has_PossibleDiagnosis':
 * @property integer $Diagnosis_idDiagnosis
 * @property integer $PossibleDiagnosis_idPossibleDiagnosis
 */
class DiagnosisHasPossibleDiagnosis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Diagnosis_has_PossibleDiagnosis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Diagnosis_idDiagnosis, PossibleDiagnosis_idPossibleDiagnosis', 'required'),
			array('Diagnosis_idDiagnosis, PossibleDiagnosis_idPossibleDiagnosis', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Diagnosis_idDiagnosis, PossibleDiagnosis_idPossibleDiagnosis', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Diagnosis_idDiagnosis' => 'Diagnosis Id Diagnosis',
			'PossibleDiagnosis_idPossibleDiagnosis' => 'Possible Diagnosis Id Possible Diagnosis',
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

		$criteria->compare('Diagnosis_idDiagnosis',$this->Diagnosis_idDiagnosis);
		$criteria->compare('PossibleDiagnosis_idPossibleDiagnosis',$this->PossibleDiagnosis_idPossibleDiagnosis);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DiagnosisHasPossibleDiagnosis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
