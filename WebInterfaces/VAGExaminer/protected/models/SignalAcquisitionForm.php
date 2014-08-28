<?php

class SignalAcquisitionForm extends CFormModel
{
	public $Patients_idPatients;
	public $Sessions_idSession;
	public $knee;
	public $Sensors_idSensors_patella;
	public $Sensors_idSensors_tibialPlateauMedial;
	public $Sensors_idSensors_tibialPlateauLateral;
	public $Protocols_idProtocols;
	public $SignalConditioners_idSignalConditioners;	
	public $Orthosis_idOrthosis;
	public $samplesRate;
	public $bitsPerSample;
	public $startTime;
	public $filename;

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
				array('knee, Sensors_idSensors_patella, Sensors_idSensors_tibialPlateauMedial, Sensors_idSensors_tibialPlateauLateral, Protocols_idProtocols, SignalConditioners_idSignalConditioners, Orthosis_idOrthosis, samplesRate, bitsPerSample', 'required'),
				array('knee, bitsPerSample, samplesRate', 'numerical', 'integerOnly'=>true),
				//0 = Left, 1 = Right
				array('knee','numerical','min'=>0, 'max'=>1),
				array('Sensors_idSensors_patella, Sensors_idSensors_tibialPlateauMedial, Sensors_idSensors_tibialPlateauLateral, Protocols_idProtocols, SignalConditioners_idSignalConditioners, Orthosis_idOrthosis', 'length', 'max'=>10),
				//array('Sensors_idSensors_patella','atLeastOne','Sensors_idSensors_patella','Sensors_idSensors_tibialPlateauMedial','Sensors_idSensors_tibialPlateauLateral'),
				array('Sensors_idSensors_patella, Sensors_idSensors_tibialPlateauMedial, Sensors_idSensors_tibialPlateauLateral','atLeastOne','Sensors_idSensors_patella','Sensors_idSensors_tibialPlateauMedial','Sensors_idSensors_tibialPlateauLateral'),
				
				array('knee, Sensors_idSensors_patella, Sensors_idSensors_tibialPlateauMedial, Sensors_idSensors_tibialPlateauLateral, Protocols_idProtocols, SignalConditioners_idSignalConditioners, Orthosis_idOrthosis, samplesRate, bitsPerSample', 'safe'),
		);
	}
	
	public function atLeastOne($attribute,$params)
	{
		$valid = false;
		foreach ($params as $param)
		{
			if($this->$param!=='-1')
			{
				$valid = true;
				break;
			}
		}
		if($valid === false)
		{
			echo "false";
			$this->addError($attribute, 'At least one sensor should be selected');
		}
	}
	
	public function attributeLabels()
	{
		return array(
				'knee' => 'Knee',
				'Sensors_idSensors_patella' => 'Patella Sensor',
				'Sensors_idSensors_tibialPlateauMedial' => 'Tibial Plateau Medial Sensor',
				'Sensors_idSensors_tibialPlateauLateral' => 'Tibial Plateau Lateral Sensor',
				'Protocols_idProtocols' => 'Protocol',
				'SignalConditioners_idSignalConditioners' => 'Signal Conditioner',
				'Orthosis_idOrthosis' => 'Orthosis',
				'samplesRate' => 'Samples Rate (Sample/Second)',
				'bitsPerSample' => 'Bits/Sample',
		);
	}
}
