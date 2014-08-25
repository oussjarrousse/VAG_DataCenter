<?php

class SessionsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','import','delete','listFTPFiles'),
				'users'=>array('admin'),
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
		$model=new Sessions;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sessions']))
		{
			$model->attributes=$_POST['Sessions'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idSession));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
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

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Sessions');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionImport()
	{
		//Browse ftp server
		$this->actionListFTPFiles();
		//Select File
		//Import Task
	}
	
	public function actionListFTPFiles($dir='')
	{
		$ftp = Yii::app()->ftp;
		$currentDir = $ftp->currentDir();
		if(substr(strrev($dir),0,2)==='..')
		{
			$dir = strstr($dir ,'/..',true);
			$dir = rtrim(strrev(strstr(strrev($dir) ,'/')),'/');
		}	

		if(!empty($dir))
		{
			$newDir = $currentDir.'/'.$dir;
			$ftp->chdir($newDir);
		}
		
		$currentDir = $ftp->currentDir();
		$contents=$ftp->listFiles('.');
		$i=0;
		$rawList = array();//Multidimentional Array
		if(!empty($dir))
		{
			$rawList[0]=array(
					'image'=>'0', 
					'dir'=>'..', 
					'action'=>'sessions/listFTPFiles', 
					'get'=>$dir.'/..',
					'modified'=>'',
			);
			$i++;
		}
		foreach($contents as $item)
		{
			if($item!='.' && $item!='..')
			{
				$res=$ftp->size($currentDir.'/'.$item);
				//If this is a file (not a directory)
				if($res)
				{
					$fileExtension = strtolower(substr($item, strrpos($item, '.')+1));
					if($fileExtension==='xml')
					{
						$rawList[$i] = array(
							'image'=>'1',
							'dir'=>$item,
							'action'=>'sessions/importXMLFile',
							'get'=>$dir.'/'.$item,
						);
						$i++;
					}
				}
				//If this is a directory
				else
				{
					$rawList[$i] = array(
						'image'=>'0',
						'dir'=>$item,
						'action'=>'sessions/listFTPFiles',
						'get'=>$dir.'/'.$item,
					);
					$i++;
				}

			}
		}
		//*
		//print_r($rawList);
		//*/
		//$RESULT['FILELIST']=$filelist;
		//$RESULT['DIRLIST']=$dirlist;
		
		$dataProviderOptions = array();
		
		$dataProviderOptions['keyField'] = 'image';
		$dataProviderOptions['pagination'] = false;
		
		$sortFilesAndFolders = new CSort();
		$sortFilesAndFolders->attributes = array(
			'image',
			'dir',
			'action',
			'get',
		);
		$sortFilesAndFolders->defaultOrder = array('image'=>CSort::SORT_ASC);

		$dataProviderOptions['sort'] = $sortFilesAndFolders;
		
		
		$dataProvider = new CArrayDataProvider($rawList, $dataProviderOptions); 
		$this->render('browseFTP',array(
			'dataProvider'=>$dataProvider,'dir'=>$dir
		));
	}
	
	/*
	public function actionImport()
	{
		$conn_id = $this->connect2FTPserver();
		$this->browseURL($conn_id, '.');
		ftp_close($conn_id);
	}
	
	private function connect2FTPserver()
	{
		$conn_id = ftp_connect('ftp.vibroarthrography.com');
		$login_result = ftp_login($conn_id, 'lmu', 'd41d8cd98f00b204e9800998ecf8427e');
		return $conn_id;
	}
	
	public function browseURL($conn_id, $URL)
	{
		// set up basic connection
		// login with username and password
		
		// get contents of the current directory
		$content = ftp_nlist($conn_id, $URL);
		foreach ($content as $entry)
		{
			$newURL = $URL.'/'.$entry;
			echo "<a href=/contro$newURL>".$entry."</a></br>";
		}
		//return $contents;
	}
	*/
	
	/**
	 * Manages all models.
	 */
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
