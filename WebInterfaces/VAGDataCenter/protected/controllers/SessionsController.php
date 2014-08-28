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
				'actions'=>array('admin','import','importSession','delete','listFTPFiles','importXMLFile'),
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
	public function actionImport()//Why is this needed???
	{
	
		$this->actionListFTPFiles('Measurements');
	}
	
	public function actionListFTPFiles($dir='',$patientMD5Hash='')
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
		$importable = false;
		$rawList = array();//Multidimentional Array
		if(!empty($dir))
		{
			$rawList[0]=array(
					'image'=>'0',
					'dir'=>'..',
					'action'=>'sessions/listFTPFiles',
					'get'=>$dir.'/..',
					'link'=>true,
			);
			$i++;
		}

		foreach($contents as $item)
		{
			if($item!='.' && $item!='..')
			{
				$res=$ftp->size($currentDir.'/'.$item);
				//If this is a file (not a directory)
	
	
				//if(!$res)
				//*
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
								'link'=>true,
						);
						$importable = true;
						$i++;
					}
				}
				else
					//*/
					//If this is a directory
				{
					$rawList[$i] = array(
							'image'=>'0',
							'dir'=>$item,
							'action'=>'sessions/listFTPFiles',
							'get'=>$dir.'/'.$item,
							'link'=>true,
							//'importable'=>$importable,
					);
					$i++;
				}
	
			}
		}
	
		$dataProviderOptions = array();
	
		$dataProviderOptions['keyField'] = 'image';
		$dataProviderOptions['pagination'] = false;
	
		$sortFilesAndFolders = new CSort();
		$sortFilesAndFolders->attributes = array(
				'action',
				'dir',
				'get',
				'image',
				'link',
		);
		$sortFilesAndFolders->defaultOrder = array('image'=>CSort::SORT_ASC, 'dir'=>CSort::SORT_ASC);
	
		$dataProviderOptions['sort'] = $sortFilesAndFolders;
	
		$dataProvider = new CArrayDataProvider($rawList, $dataProviderOptions);
		$this->render('browseFTP',array(
				'dataProvider'=>$dataProvider,
				'dir'=>$dir,
				'importable'=>$importable,
				'patientMD5Hash'=>$patientMD5Hash,
		));
	}
	
	private function copyRemoteXMLFile($dir)
	{
		$ftp = Yii::app()->ftp;
		$currentDir = $ftp->currentDir();
		//$local =Yii::app()->runtimePath.'/test.xml';
		$local =Yii::app()->runtimePath.'/'.basename($dir);
		//$localXMLFilename = 'test.xml';
		//echo $local ; echo " ";
		$remote = $currentDir.'/'.$dir;
		//echo $remote; echo " ";
		//*
		try
		{
			$result = $ftp->get($local,$remote);
			if($result)
			{
				return $local;
	
			}
			else
			{
				echo "failed";
				return false;
			}
			//the file is here
		}
		catch (CException $e)
		{
			echo $e->getMessage();
			return false;
		}
	}
		
	private function analyzeXMLFilename($dir)
	{
		$result = array();
		$pathInfo = pathinfo($dir);
		//var_dump($pathInfo);
		//extract all information possible from $dir
		//Get the sessionName from the path whatever is before the last /
		$result['Basename'] =$pathInfo['basename'];
		$result['Filename'] = $pathInfo['filename'];
		$result['Dirname'] = $pathInfo['dirname'];
		$result['Extension'] = $pathInfo['extension'];
		
		$xmlFileBasename = $pathInfo['filename'];
		$xmlFileBasenameExpolded = explode('-',$xmlFileBasename);
		$patientMD5Hash = array_shift($xmlFileBasenameExpolded);//
		$result['Patient'] = $patientMD5Hash; 
		$result['Knee'] = array_shift($xmlFileBasenameExpolded)==='L'?'0':'1';
		$year = array_shift($xmlFileBasenameExpolded);
		$month = array_shift($xmlFileBasenameExpolded);
		$day = array_shift($xmlFileBasenameExpolded);
		$hour = array_shift($xmlFileBasenameExpolded);
		$minute = array_shift($xmlFileBasenameExpolded);
		//echo $sessionMinute ;
		$fileTimestamp = date("Y-m-d H:i:s",mktime($hour,$minute,"00",$month,$day,$year));
		$result['Timestamp'] = $fileTimestamp;
		$signalAquisitionSensorName = array_shift($xmlFileBasenameExpolded);
		$result['Sensor Name'] = $signalAquisitionSensorName;
		$result['Sensor Position'] = array_shift($xmlFileBasenameExpolded);
		$signalAquisitionOrthosis = array_shift($xmlFileBasenameExpolded);
		$result['Orthosis'] = $signalAquisitionOrthosis;
		$signalAquisitionProtocolName = implode('-',$xmlFileBasenameExpolded);
		$result['Protocol'] = $signalAquisitionProtocolName;
		/*
		echo $patientMD5Hash; echo " ";
		echo $result['Knee']; echo " ";
		echo $signalAquisitionSensorName ; echo " ";
		echo $signalAquisitionSensorLocation; echo " ";
		echo $signalAquisitionOrthosis; echo " ";
		echo $signalAquisitionProtocolName; echo " ";
		echo $fileTimestamp;echo " ";
		//*/
		//Get session name from the folder...
		//echo strstr(dirname($dir),'Session');
		$result['Session Name']= strrev(strstr(strrev(strstr($pathInfo['dirname'],'Session-')), '-noisseS',true));
		//var_dump($result);
		return $result;
	}

	private function analyzeXMLFileContent($dir)
	{
		//Get xml file content
		$xml = simplexml_load_file($dir)or die("Error: Can not create object");
		
		//var_dump($xml);
		
		//Check validity
		$xmlRoot = $xml->getName();
		if($xmlRoot !== "vagdata")
			return false;
		//echo $xmlRoot;
		//Get Version of vagdata xml file
		$vagdataVersion = $xml['version'];
		
		//Currently no need to check more ;-)
		
		$result = array();

		//parse xml file content
		$signalFilename = $xml->signal;
		$signalFilename = str_replace('\\', '/', $signalFilename );
		$signalPathInfo = pathinfo($signalFilename);
		
		$result['Dirname']=$signalPathInfo['dirname'];
		$result['Basename']=$signalPathInfo['basename'];
		$result['Extension']=$signalPathInfo['extension'];
		$result['Filename']=$signalPathInfo['filename'];
		
		$fileTimestamp = (string)$xml->meta->timestamp;
		$fileTimestampExploded = explode('-',$fileTimestamp);
		$result['Timestamp'] =date("Y-m-d H:i:s",mktime(
				$fileTimestampExploded[3], 	//hours
				$fileTimestampExploded[4], 	//minutes
				0,							//seconds
				$fileTimestampExploded[1],	//month
				$fileTimestampExploded[2],	//day
				$fileTimestampExploded[0]));//year
		$sessionName = (string)$xml->meta->session;
		$result['Session Name'] = $sessionName;
		
		$patientMD5Hash = (string)$xml->meta->md5hash;
		$result['Patient'] = $patientMD5Hash;
		$knee = (string)$xml->meta->knee;
		$result['Knee'] = $knee==='L'?'0':'1';
		$result['Protocol'] = (string)$xml->meta->protocol;
		$result['Sensor Name'] = (string)$xml->meta->sensor->name;
		$result['Sensor Position'] = (string)$xml->meta->sensor->position;
		$result['Orthosis'] = (string)$xml->meta->orthosis->name;
		//var_dump($result);
		return $result;
		//Done parsing
	}
	
	public function actionImportXMLFile($dir)
	{
		echo "Hello";
		if(! $dir)
		{
			$this->actionImport();
		}
		//Get the file to local dir for reading
		try{
			$local = $this->copyRemoteXMLFile($dir);
		}
		catch(CException $e)
		{
			echo $e->getMessage();
		}
		
		//Analyzing the file
		//Extract info from the filename and path
		$analyzedXMLFilename = $this->analyzeXMLFilename($dir);
		$analyzedXMLFileContent = $this->analyzeXMLFileContent($local);
		//Cleanup
		//done with the file
		unlink($local);
		
		//Sanity Check
		//compare content with filename (alert user & filename wins)
		$sanity = true;
		if($analyzedXMLFilename['Session Name']!==$analyzedXMLFileContent['Session Name'])
		{
			echo "Sanity Check Error: Session Name";
			$sanity = false;
		}
		if($analyzedXMLFilename['Patient']!==$analyzedXMLFileContent['Patient'])
		{
			echo "Sanity Check Error: Patient";
			$sanity = false;
		}
		if($analyzedXMLFilename['Knee']!==$analyzedXMLFileContent['Knee'])
		{
			echo "Sanity Check Error: Knee";
			$sanity = false;
		}
		if($analyzedXMLFilename['Orthosis']!==$analyzedXMLFileContent['Orthosis'])
		{
			echo "Sanity Check Error: Orthosis";
			$sanity = false;
		}
		if($analyzedXMLFilename['Sensor Name']!==$analyzedXMLFileContent['Sensor Name'])
		{
			echo "Sanity Check Error: Sensor Name";
			$sanity = false;
		}
		if($analyzedXMLFilename['Sensor Position']!==$analyzedXMLFileContent['Sensor Position'])
		{
			echo "Sanity Check Error: Sensor Name";
			$sanity = false;
		}
		//insert session information and signal acquisition to the database
		if(! $sanity)
		{
			return;
		}
		$sessionModel = new Sessions;
		$signalAcquisitionModel = new SignalAcquisition;
		
		/*
		* @property string $idSession
		* @property string $sessionName
		* @property string $timestamp
		* @property string $SystemUsers_idSystemUser
		* @property string $Patients_idPatients
		//*/
		
		/*
		* @property string $idSignalAcquisition
		* @property string $Patients_idPatients
		* @property string $Sessions_idSession
		* @property integer $knee
		* @property integer $position
		* @property string $Sensors_idSensors
		* @property string $Protocols_idProtocols
		* @property string $SignalConditioners_idSignalConditioners
		* @property string $Orthosis_idOrthosis
		* @property double $samplesRate
		* @property integer $bitsPerSample
		* @property string $startTime
		* @property string $filename
		//*/
	}
	
	public function actionImportSession($dir='')//Why is this needed???
	{
		if(empty($dir) || !$dir)
		{
			$this->actionImport();
		}
		//Get the xml files list
		$ftp = Yii::app()->ftp;
		$currentDir = $ftp->currentDir();
		if(substr(strrev($dir),0,2)==='..')
		{
			$dir = strstr($dir ,'/..',true);
			$dir = rtrim(strrev(strstr(strrev($dir) ,'/')),'/');
		}	
		
		$newDir = $currentDir.'/'.$dir;
		$ftp->chdir($newDir);
		
		$currentDir = $ftp->currentDir();
		$contents=$ftp->listFiles('.');
		$xmlFiles=array();
		//Go over all xml files
		$i=0;
		foreach($contents as $item)
		{
			if($item!='.' && $item!='..')
			{
				$fileSize=$ftp->size($currentDir.'/'.$item);
				if($fileSize)
				{
					$fileExtension = strtolower(substr($item, strrpos($item, '.')+1));
					if($fileExtension==='xml')
					{
						//get the file
						$local = $this->copyRemoteXMLFile($item);
						//$xmlFiles[$i]=$dir.'/'.$item;
						$xmlFiles[$i]['dir']=$dir.'/'.$item;
						$xmlFiles[$i]['analyzeXMLFilename']=$this->analyzeXMLFilename($xmlFiles[$i]['dir']);
						$xmlFiles[$i]['analyzeXMLContent']=$this->analyzeXMLFileContent($local);
						unlink($local);
						//Check for sanity
						$sanity = true;
						if($xmlFiles[$i]['analyzeXMLFilename']['Session Name']!==$xmlFiles[$i]['analyzeXMLContent']['Session Name'])
						{
							echo "Sanity Check Error: Session Name";
							$sanity = false;
						}
						if($xmlFiles[$i]['analyzeXMLFilename']['Patient']!==$xmlFiles[$i]['analyzeXMLContent']['Patient'])
						{
							echo "Sanity Check Error: Patient ";
							echo $xmlFiles[$i]['analyzeXMLFilename']['Patient'];
							echo " ";
							echo $xmlFiles[$i]['dir'];
							$sanity = false;
						}
						if($xmlFiles[$i]['analyzeXMLFilename']['Knee']!==$xmlFiles[$i]['analyzeXMLContent']['Knee'])
						{
							echo "Sanity Check Error: Knee";
							$sanity = false;
						}
						if($xmlFiles[$i]['analyzeXMLFilename']['Orthosis']!==$xmlFiles[$i]['analyzeXMLContent']['Orthosis'])
						{
							echo "Sanity Check Error: Orthosis ";
							echo $xmlFiles[$i]['analyzeXMLFilename']['Orthosis'];
							echo " ";
							echo $xmlFiles[$i]['analyzeXMLContent']['Orthosis'];
							echo " ";
							echo $xmlFiles[$i]['dir'];
							$sanity = false;
						}
						if($xmlFiles[$i]['analyzeXMLFilename']['Sensor Name']!==$xmlFiles[$i]['analyzeXMLContent']['Sensor Name'])
						{
							echo "Sanity Check Error: Sensor Name";
							echo $xmlFiles[$i]['dir'];
							$sanity = false;
						}
						if($xmlFiles[$i]['analyzeXMLFilename']['Sensor Position']!==$xmlFiles[$i]['analyzeXMLContent']['Sensor Position'])
						{
							echo "Sanity Check Error: Sensor Position";
							echo $xmlFiles[$i]['analyzeXMLFilename']['Sensor Position'];
							echo " ";
							echo $xmlFiles[$i]['dir'];
							$sanity = false;
						}
						//insert session information and signal acquisition to the database
						if(! $sanity)
						{
							return;
						}
						
						//Fill a signalAquisition model and save it  
						$i++;
					}
				}
			}
		}
		if($i===0)
		{
			Yii::app()->user->setFlash('error.bad','Something went really wrong as no xml files were found!');
			$this->redirect(array('sessions/listFTPFiles','dir'=>$dir));
		}
		//go ahead and create the session if it does not exist
		//Find the smallest time stamp of a session... 
		$sessionTimestamp = $xmlFiles[0]['analyzeXMLFilename']['Timestamp'];
		foreach($xmlFiles as $xmlFile)
		{	
			$temp = $xmlFile['analyzeXMLFilename']['Timestamp'];
			if($temp < $sessionTimestamp)
			{
				//echo $temp;
				$sessionTimestamp=$temp;
			}
		}
		$sessionName = $xmlFiles[0]['analyzeXMLFilename']['Session Name'];
		$patientMD5Hash = $xmlFiles[0]['analyzeXMLFilename']['Patient'];
		//Search for session using session name
		$session = Sessions::model()->findByAttributes(array('sessionName'=>$sessionName));
		if(empty($session))	//If does not exists, create a new session
		{
			//but first...
			//Check if patient already in Database
			$patient = Patients::model()->findByMD5Hash($patientMD5Hash);
			if(empty($patient))
			{
				Yii::app()->user->setFlash('error.patient.not.fount','Patient not found in the Database. ');
				$this->redirect(array('sessions/listFTPFiles','dir'=>$dir, 'patientMD5Hash'=>$patientMD5Hash));
			}
			//echo $patient->idPatients;
			//echo Yii::App()->user->id; echo " ";

			$session = new Sessions();
			$session->timestamp = $sessionTimestamp;
			$session->sessionName = $sessionName;
			$session->Patients_idPatients = $patient->idPatients;
			$session->SystemUsers_idSystemUser = Yii::App()->user->id;
			//var_dump($session);
			//*
			try
			{
				if(!$session->Save())
					throw new CException('Session save failed.');
			}
			catch(CException $e)
			{
				Yii::app()->user->setFlash('error.save.failed',$e->getMessage());
				$this->redirect(array('sessions/listFTPFiles','dir'=>$dir, 'patientMD5Hash'=>$patientMD5Hash));
			}
			//*/
			//$this->redirect(array('view','id'=>$model->idPatientsSecret));
			//$this->redirect(array('sessions/listFTPFiles','dir'=>$dir));
		}
		//Go ahead to process the XML files and add signalAcquisitions
		sort($xmlFiles);
		foreach($xmlFiles as $xmlFile)
		{
			//var_dump($xmlFile);
			$filename = $xmlFile['analyzeXMLFilename']['Dirname'].'/'.$xmlFile['analyzeXMLFilename']['Filename'].'.wav';
			//check if the file is already in the system
			$signal = SignalAcquisition::model()->findByAttributes(array('filename'=>$filename));
			if(empty($signal))
			{
				$signal = new SignalAcquisition();
				$signal->Patients_idPatients = Patients::model()->findByMD5Hash($xmlFile['analyzeXMLFilename']['Patient'])->idPatients;
				$signal->Sessions_idSession = $session->idSession;
				$signal->knee = $xmlFile['analyzeXMLFilename']['Knee'];
				$position = $xmlFile['analyzeXMLFilename']['Sensor Position'];
				if($position == 'Patella')
				{
					$signal->position = 0;
				}
				elseif ($position =='TibiaplateauMedial')
				{
					$signal->position = 1;
				}
				elseif ($position == 'TibiaplateauLateral')
				{
					$signal->position = 2;
				}
				else
				{
					echo 'error what the hell is: $signalAquisitionSensorPosition ';
					return;
				}
				$sensor = Sensors::model()->findByAttributes(array('name'=>$xmlFile['analyzeXMLFilename']['Sensor Name']));
				if(empty($sensor))
				{
					echo 'problem with the sensor: '.$xmlFile['analyzeXMLFilename']['Sensor Name'].' ';
					echo $i;
					return;
				}
				$signal->Sensors_idSensors = $sensor->idSensors;
				//echo $xmlFile['analyzeXMLFilename']['Protocol'];
				$protocol = Protocols::model()->findByAttributes(array('name'=>$xmlFile['analyzeXMLFilename']['Protocol']));
				//var_dump($protocol);
				$signal->Protocols_idProtocols = $protocol->idProtocols;
				$signal->SignalConditioners_idSignalConditioners = 1;
				$signal->samplesRate = 16000;
				$signal->bitsPerSample = 24;
				$signal->startTime = $xmlFile['analyzeXMLFilename']['Timestamp'];
				$orthosis = Orthosis::model()->findByAttributes(array('name'=>$xmlFile['analyzeXMLFilename']['Orthosis']));
				if(empty($orthosis))
				{
					echo 'problem with the orthosis: '.$xmlFile['analyzeXMLFilename']['Orthosis'].' ';
					echo $i;
					return;
				}
				$signal->Orthosis_idOrthosis = $orthosis->idOrthosis;
				$signal->filename = $filename;
				$signal->save();
				//var_dump($signal); 
			}
			//var_dump($signal);
			//return;
		}
		$this->redirect(array('sessions/index'));
		//sort($xmlFiles);
		//var_dump($xmlFiles);
		//Get the time of the first file
		//$this->redirect(array('sessions/index'));
		//$this->redirect(array('sessions/index'));
	}
	
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
