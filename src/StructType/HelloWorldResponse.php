<?php

namespace PortalJustRomania\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HelloWorldResponse StructType
 * @subpackage Structs
 */
class HelloWorldResponse extends AbstractStructBase
{
    /**
     * The HelloWorldResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HelloWorldResult;
    /**
     * Constructor method for HelloWorldResponse
     * @uses HelloWorldResponse::setHelloWorldResult()
     * @param string $helloWorldResult
     */
    public function __construct($helloWorldResult = null)
    {
        $this
            ->setHelloWorldResult($helloWorldResult);
    }
    /**
     * Get HelloWorldResult value
     * @return string|null
     */
    public function getHelloWorldResult()
    {
        return $this->HelloWorldResult;
    }
    /**
     * Set HelloWorldResult value
     * @param string $helloWorldResult
     * @return \PortalJustRomania\StructType\HelloWorldResponse
     */
    public function setHelloWorldResult($helloWorldResult = null)
    {
        // validation for constraint: string
        if (!is_null($helloWorldResult) && !is_string($helloWorldResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($helloWorldResult, true), gettype($helloWorldResult)), __LINE__);
        }
        $this->HelloWorldResult = $helloWorldResult;
        return $this;
    }
}
