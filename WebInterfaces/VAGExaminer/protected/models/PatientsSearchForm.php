<?php
/**
 * PatientsSearchForm class.
 * PatientsSearchForm is the data structure used by the PatientsController to search the database for Patients
 */

class PatientsSearchForm extends CFormModel
{
	public $firstname;
	public $lastname;
	public $birthdate;
	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			array('firstname, lastname, birthdate', 'required'),
			array('firstname, lastname', 'length', 'max'=>45),
			array('firstname, lastname', 'filter', 'filter'=>'trim'),
			array('firstname, lastname', 'filter', 'filter'=>'strip_tags'),
			array('birthdate','date','format'=>'yyyy-MM-dd'),//MySQL like format
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
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'birthdate' => 'Birthdate',
		);
	}
}