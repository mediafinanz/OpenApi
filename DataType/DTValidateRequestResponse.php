<?php

/**
 * @name $OpenApiDataType
 */
namespace OpenApi\DataType;

use MVC\DataType\DTValue;
use MVC\MVCTrait\TraitDataType;

class DTValidateRequestResponse
{
	use TraitDataType;

	public const DTHASH = '654f645128c58e61fd44b7f9c3009755';

	/**
	 * @required true
	 * @var bool
	 */
	protected $bSuccess;

	/**
	 * @required true
	 * @var DTValidateMessage[]
	 */
	protected $aMessage;

	/**
	 * @required true
	 * @var array
	 */
	protected $aValidationResult;

	/**
	 * DTValidateRequestResponse constructor.
	 * @param DTValue $oDTValue
	 * @throws \ReflectionException 
	 */
	protected function __construct(DTValue $oDTValue)
	{
		\MVC\Event::run('DTValidateRequestResponse.__construct.before', $oDTValue);
		$aData = $oDTValue->get_mValue();
		$this->bSuccess = false;
		$this->aMessage = [];
		$this->aValidationResult = null;
		$this->setProperties($oDTValue);

		$oDTValue = DTValue::create()->set_mValue($aData); 
		\MVC\Event::run('DTValidateRequestResponse.__construct.after', $oDTValue);
	}

    /**
     * @param array|null $aData
     * @return DTValidateRequestResponse
     * @throws \ReflectionException
     */
    public static function create(?array $aData = array())
    {            
        (null === $aData) ? $aData = array() : false;
        $oDTValue = DTValue::create()->set_mValue($aData);
		\MVC\Event::run('DTValidateRequestResponse.create.before', $oDTValue);
		$oObject = new self($oDTValue);
        $oDTValue = DTValue::create()->set_mValue($oObject); \MVC\Event::run('DTValidateRequestResponse.create.after', $oDTValue);

        return $oDTValue->get_mValue();
    }

	/**
	 * @param bool $mValue 
	 * @return $this
	 * @throws \ReflectionException
	 */
	public function set_bSuccess(bool $mValue)
	{
		$oDTValue = DTValue::create()->set_mValue($mValue); 
		\MVC\Event::run('DTValidateRequestResponse.set_bSuccess.before', $oDTValue);
		$this->bSuccess = (bool) $oDTValue->get_mValue();

		return $this;
	}

	/**
	 * @param DTValidateMessage[]  $mValue 
	 * @return $this
	 * @throws \ReflectionException
	 */
	public function set_aMessage(array $mValue)
	{
		$oDTValue = DTValue::create()->set_mValue($mValue); 
		\MVC\Event::run('DTValidateRequestResponse.set_aMessage.before', $oDTValue);

		$mValue = (array) $oDTValue->get_mValue();
                
        foreach ($mValue as $mKey => $aData)
        {            
            if (false === ($aData instanceof DTValidateMessage))
            {
                $mValue[$mKey] = DTValidateMessage::create($aData);
            }
        }

		$this->aMessage = $mValue;

		return $this;
	}

	/**
	 * @param DTValidateMessage $mValue
	 * @return $this
	 * @throws \ReflectionException 
	 */
	public function add_aMessage(DTValidateMessage $mValue)
	{
		$oDTValue = DTValue::create()->set_mValue($this->aMessage); 
		\MVC\Event::run('DTValidateRequestResponse.add_aMessage.before', $oDTValue);

		$this->aMessage[] = $mValue;

		return $this;
	}

	/**
	 * @param array  $mValue 
	 * @return $this
	 * @throws \ReflectionException
	 */
	public function set_aValidationResult(array $mValue)
	{
		$oDTValue = DTValue::create()->set_mValue($mValue); 
		\MVC\Event::run('DTValidateRequestResponse.set_aValidationResult.before', $oDTValue);

		$this->aValidationResult = $mValue;

		return $this;
	}

	/**
	 * @param array $mValue
	 * @return $this
	 * @throws \ReflectionException 
	 */
	public function add_aValidationResult(array $mValue)
	{
		$oDTValue = DTValue::create()->set_mValue($this->aValidationResult); 
		\MVC\Event::run('DTValidateRequestResponse.add_aValidationResult.before', $oDTValue);

		$this->aValidationResult[] = $mValue;

		return $this;
	}

	/**
	 * @return bool
	 * @throws \ReflectionException
	 */
	public function get_bSuccess() : bool
	{
		$oDTValue = DTValue::create()->set_mValue($this->bSuccess); 
		\MVC\Event::run('DTValidateRequestResponse.get_bSuccess.before', $oDTValue);

		return $oDTValue->get_mValue();
	}

	/**
	 * @return DTValidateMessage[]
	 * @throws \ReflectionException
	 */
	public function get_aMessage()
	{
		$oDTValue = DTValue::create()->set_mValue($this->aMessage); 
		\MVC\Event::run('DTValidateRequestResponse.get_aMessage.before', $oDTValue);

		return $oDTValue->get_mValue();
	}

	/**
	 * @return array
	 * @throws \ReflectionException
	 */
	public function get_aValidationResult() : array
	{
		$oDTValue = DTValue::create()->set_mValue($this->aValidationResult); 
		\MVC\Event::run('DTValidateRequestResponse.get_aValidationResult.before', $oDTValue);

		return $oDTValue->get_mValue();
	}

	/**
	 * @return string
	 */
	public static function getPropertyName_bSuccess()
	{
        return 'bSuccess';
	}

	/**
	 * @return string
	 */
	public static function getPropertyName_aMessage()
	{
        return 'aMessage';
	}

	/**
	 * @return string
	 */
	public static function getPropertyName_aValidationResult()
	{
        return 'aValidationResult';
	}

	/**
	 * @return false|string JSON
	 */
	public function __toString()
	{
        return $this->getPropertyJson();
	}

	/**
	 * @return false|string
	 */
	public function getPropertyJson()
	{
        return json_encode(\MVC\Convert::objectToArray($this));
	}

	/**
	 * @return array
	 */
	public function getPropertyArray()
	{
        return get_object_vars($this);
	}

	/**
	 * @return array
	 * @throws \ReflectionException
	 */
	public function getConstantArray()
	{
		$oReflectionClass = new \ReflectionClass($this);
		$aConstant = $oReflectionClass->getConstants();

		return $aConstant;
	}

	/**
	 * @return $this
	 */
	public function flushProperties()
	{
		foreach ($this->getPropertyArray() as $sKey => $mValue)
		{
			$sMethod = 'set_' . $sKey;

			if (method_exists($this, $sMethod)) 
			{
				$this->$sMethod('');
			}
		}

		return $this;
	}

}
