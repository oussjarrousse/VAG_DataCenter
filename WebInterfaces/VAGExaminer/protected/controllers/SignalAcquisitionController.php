<?php

class SignalAcquisitionController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	//public $defaultAction = 'index';
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
			array('allow', // allow authenticated user to perform 'create' and 'view' actions
				'actions'=>array('create','view'),
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
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$idPatient = Yii::app()->session['idPatient'];
		$idSession = Yii::app()->session['idSession'];
		if(empty($idPatient) || empty($idSession))
		{
			$this->redirect(array('site/index'));
		}

		$modelForm=new SignalAcquisitionForm;
		$modelForm->Patients_idPatients = $idPatient;
		$modelForm->Sessions_idSession = $idSession;
		$modelForm->bitsPerSample=32;
		$modelForm->samplesRate=16000;
		$modelForm->Sensors_idSensors_patella = 1;
		$modelForm->Sensors_idSensors_tibialPlateauMedial = 1;
		$modelForm->Sensors_idSensors_tibialPlateauLateral = -1;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SignalAcquisitionForm']))
		{
			$modelForm->attributes=$_POST['SignalAcquisitionForm'];
			if($modelForm->Sensors_idSensors_patella == -1 && $modelForm->Sensors_idSensors_tibialPlateauMedial == -1 && $modelForm->Sensors_idSensors_tibialPlateauLateral == -1)
			{
				echo "No Sensors";
			}
			else
			{
				$transaction = Yii::app()->db->beginTransaction();
				try
				{
					if($modelForm->Sensors_idSensors_patella != -1)
					{
						$model=new SignalAcquisition;
						$model->Patients_idPatients = $idPatient;
						$model->Sessions_idSession = $idSession;
						$model->knee = $modelForm->knee;
						$model->position = 0;
						$model->bitsPerSample=$modelForm->bitsPerSample;
						$model->samplesRate=$modelForm->samplesRate;
						$model->Sensors_idSensors = $modelForm->Sensors_idSensors_patella;
						$model->SignalConditioners_idSignalConditioners = $modelForm->SignalConditioners_idSignalConditioners ;
						$model->Orthosis_idOrthosis= $modelForm->Orthosis_idOrthosis;
						$model->Protocols_idProtocols=$modelForm->Protocols_idProtocols;
						if(!$model->Save())
							throw new Exception('save failed');
						//XML Magic;
					}
					if($modelForm->Sensors_idSensors_tibialPlateauMedial!= -1)
					{
						$model=new SignalAcquisition;
						$model->Patients_idPatients = $idPatient;
						$model->Sessions_idSession = $idSession;
						$model->knee = $modelForm->knee;
						$model->position = 1;
						$model->bitsPerSample=$modelForm->bitsPerSample;
						$model->samplesRate=$modelForm->samplesRate;
						$model->Sensors_idSensors = $modelForm->Sensors_idSensors_patella;
						$model->SignalConditioners_idSignalConditioners = $modelForm->SignalConditioners_idSignalConditioners ;
						$model->Orthosis_idOrthosis= $modelForm->Orthosis_idOrthosis;
						$model->Protocols_idProtocols=$modelForm->Protocols_idProtocols;
						if(!$model->Save())
							throw new Exception('save failed');
						//XML Magic
					}
					if($modelForm->Sensors_idSensors_patella != -1)
					{
						$model=new SignalAcquisition;
						$model->Patients_idPatients = $idPatient;
						$model->Sessions_idSession = $idSession;
						$model->knee = $modelForm->knee;
						$model->position = 2;
						$model->bitsPerSample=$modelForm->bitsPerSample;
						$model->samplesRate=$modelForm->samplesRate;
						$model->Sensors_idSensors = $modelForm->Sensors_idSensors_patella;
						$model->SignalConditioners_idSignalConditioners = $modelForm->SignalConditioners_idSignalConditioners ;
						$model->Orthosis_idOrthosis= $modelForm->Orthosis_idOrthosis;
						$model->Protocols_idProtocols=$modelForm->Protocols_idProtocols;
						if(!$model->Save())
							throw new Exception('save failed');
						//XML Magic
					}
					$transaction->commit();
					$this->redirect(array('/sessions/view','id'=>$idSession));
				}
				catch (Exception $e)
				{
					//$model->birthdate = date ('d.m.Y', strtotime($model->birthdate));
					echo $e->getMessage();
					$transaction->rollback();
					//XML Magic Rollback
				}
			}
		}

		$this->render('create',array(
			'model'=>$modelForm,
		));
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

		if(isset($_POST['SignalAcquisition']))
		{
			$model->attributes=$_POST['SignalAcquisition'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idSignalAcquisition));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	//*/
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
	//*/
	/**
	 * Lists all models.
	 */
	/*
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('SignalAcquisition');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	//*/
	/**
	 * Manages all models.
	 */
	/*
	public function actionAdmin()
	{
		$model=new SignalAcquisition('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SignalAcquisition']))
			$model->attributes=$_GET['SignalAcquisition'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	//*/
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return SignalAcquisition the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=SignalAcquisition::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param SignalAcquisition $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='signal-acquisition-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}