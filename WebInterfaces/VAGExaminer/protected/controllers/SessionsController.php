<?php

class SessionsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	
	public $defaultAction = 'list';
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
			array('allow', // allow authenticated user to perform 'view', 'create' and 'list' actions
				'actions'=>array('create','list','view'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	//*
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	//*/
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$idPatient = Yii::app()->session['idPatient'];
		if(empty($idPatient))
		{
			$this->redirect(array('Patients/Search'));
		}
		
		$model=new Sessions;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sessions']))
		{
			$model->attributes=$_POST['Sessions'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idSession));
		}
		
		$model->SystemUsers_idSystemUser = Yii::App()->user->id;
		$model->Patients_idPatients = $idPatient;
		$model->timestamp = new CDbExpression('NOW()');
		if($model->save())
		{
			$this->redirect(array('Sessions/List'));
		}
	}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	/*
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sessions']))
		{		
			$model->attributes=$_POST['Sessions'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idSession));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	*/

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	/*
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	*/
	
	/**
	 * Lists all models for a particular user
	 */
	public function actionList()
	{
		//Get the SystemUserID
		//Get the PatientID
		$idPatient = Yii::app()->session['idPatient'];
		if(empty($idPatient))
		{
			$this->redirect(array('Patients/Search'));
		}
		//Render Partial Patients where idPatients = PatientID;
		$patientModel=Patients::model()->findByPk($idPatient);
		if($patientModel===null)
		{
			throw new CHttpException(404,'This is very weird. Call oussama');
			$this->redirect(array('Patients/Search'));
		}
		
		$renderedPatientView = $this->renderPartial('/patients/view', array('model'=>$patientModel), true);
		
		$criteria = new CDbCriteria();
		$criteria->compare('Patients_idPatients',$idPatient);
		$dataProvider=new CActiveDataProvider('Sessions', array(
			'criteria'=> $criteria,
		));
		$this->render('/sessions/list',array('dataProvider'=>$dataProvider,'renderedPatientView' => $renderedPatientView));
		
		/*
		$dataProvider=new CActiveDataProvider('Sessions');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		*/
	}

	/**
	 * Manages all models.
	 */
	/*
	public function actionAdmin()
	{
		$model=new Sessions('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Sessions']))
			$model->attributes=$_GET['Sessions'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	*/
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Sessions the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Sessions::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Sessions $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sessions-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
