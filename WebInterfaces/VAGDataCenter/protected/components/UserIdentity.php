<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	//private $systemUserID;
	
	public function authenticate()
	{
		/*
		if($this->username==='admin')
		{
			if($this->password==='admin')
			{
				$systemUserID = 666;
				$this->errorCode=self::ERROR_NONE;
				echo 'hello';
				return !$this->errorCode; 
			}
		}
		*/	
		$user = SystemUsers::model()->findByAttributes(array('username'=>$this->username));
		
		if($user === NULL)
		{
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		elseif ($user->password !== $this->password)
		{
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else
		{
			$this->errorCode=self::ERROR_NONE;
			//$this->$systemUserID=$user->idSystemUser;
		}
		return !$this->errorCode;
		/*
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->password]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
		//*/
	}
	
/*	public function getId()
	{
		return $this->systemUserID;
	}
*/
}