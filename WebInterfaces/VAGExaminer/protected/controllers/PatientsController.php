<?php

class PatientsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column1', meaning
	 * using one-column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	
	public $defaultAction = 'search';
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
				'accessControl', // perform access control for CRUD operations, check the function accessRules()
				'postOnly + list', // we only allow deletion via POST request
		);
	}
	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
				array('allow', // allow authenticated user to perform 'view' and 'create' actions, do not allow other actions
						'actions'=>array('view', 'create', 'search'),
						'users'=>array('@'),
				),
				array('deny',  // deny all users
						'users'=>array('*'),
				),
		);
	}
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		unset(Yii::app()->session['idPatient']);
		
		$model=new PatientsSecret;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['PatientsSecret']))
		{
			$model->attributes=$_POST['PatientsSecret'];
			$model->md5= md5($model->firstname . $model->lastname . date('Ymd',strtotime($model->birthdate)));
			
			//check if the record already exists
			$patient = Patients::model()->findByAttributes(array('md5hash'=>$model->md5));
			if(!empty($patient))
			{
				//Set the Session idPatient
				Yii::app()->session['idPatient'] = $patient->idPatients;
				$this->redirect(array('Sessions/List'));
			}				
			$transaction = $model->dbConnection->beginTransaction();
			try
			{
				if(!$model->save())
					throw new Exception('PatientsSecret model save failed');					
				$patient = new Patients;
				$patient->idPatients = $model->idPatientsSecret;
				$patient->md5hash = $model->md5;
				$patient->birthdate = $model->birthdate;
				$patient->gender = $model->gender;
				if(!$patient->save())
					throw new Exception('Patients model save failed');
				
				$transaction->commit();
				//Redirect to the right view
				Yii::app()->session['idPatient'] = $patient->idPatients;
				$this->redirect(array('Sessions/List'));
			}
			catch (Exception $e)
			{
				//$model->birthdate = date ('d.m.Y', strtotime($model->birthdate));
				echo $e->getMessage();
				$transaction->rollback();
				//$this->redirect(array('search'));
				//$model->birthdate = date ('Y-m-d', $model->birthdate);
			}
		}
	
		if(!isset($_POST['PatientsSecret']))
		{
			if(isset($_GET['firstname']))
				$model->firstname =strip_tags($_GET['firstname']);
			if(isset($_GET['lastname']))
				$model->lastname=strip_tags($_GET['lastname']);
			if(isset($_GET['birthdate']))
				$model->birthdate=$_GET['birthdate'];
		}
		//Render the create view and pass the model
		$this->render('create',array(
				'model'=>$model,
		));
	}
	
	public function actionSearch()
	{
		//unset the session idPatient;
		unset(Yii::app()->session['idPatient']);
		unset(Yii::app()->session['idSession']);
		$model = new PatientsSearchForm;
		
		if(isset($_POST['PatientsSearchForm']))
		{
			$model->attributes=$_POST['PatientsSearchForm'];
			$md5 = md5($model->firstname . $model->lastname . date('Ymd',strtotime($model->birthdate)));
			$condition='$md5hash=1';
			$params=array('');
			$patient = Patients::model()->findByAttributes(array('md5hash'=>$md5));
			if (empty($patient)) 
			{
				// No patient found!
				// render the Create form with the right data :-)
				$this->redirect(array('Patients/Create','firstname'=>$model->firstname,'lastname'=>$model->lastname,'birthdate'=>$model->birthdate));
			}
			else
			{
				//Set the Session idPatient
				Yii::app()->session['idPatient'] = $patient->idPatients;
				$this->redirect(array('Sessions/List'));
			}
		}
		
		$this->render('search',array(
				'model'=>$model,
		));
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PatientsSecret the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Patients::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}