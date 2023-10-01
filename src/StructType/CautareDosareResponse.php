<?php

namespace PortalJustRomania\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CautareDosareResponse StructType
 * @subpackage Structs
 */
class CautareDosareResponse extends AbstractStructBase
{
    /**
     * The CautareDosareResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PortalJustRomania\ArrayType\ArrayOfDosar
     */
    public $CautareDosareResult;
    /**
     * Constructor method for CautareDosareResponse
     * @uses CautareDosareResponse::setCautareDosareResult()
     * @param \PortalJustRomania\ArrayType\ArrayOfDosar $cautareDosareResult
     */
    public function __construct(\PortalJustRomania\ArrayType\ArrayOfDosar $cautareDosareResult = null)
    {
        $this
            ->setCautareDosareResult($cautareDosareResult);
    }
    /**
     * Get CautareDosareResult value
     * @return \PortalJustRomania\ArrayType\ArrayOfDosar|null
     */
    public function getCautareDosareResult()
    {
        return $this->CautareDosareResult;
    }
    /**
     * Set CautareDosareResult value
     * @param \PortalJustRomania\ArrayType\ArrayOfDosar $cautareDosareResult
     * @return \PortalJustRomania\StructType\CautareDosareResponse
     */
    public function setCautareDosareResult(\PortalJustRomania\ArrayType\ArrayOfDosar $cautareDosareResult = null)
    {
        $this->CautareDosareResult = $cautareDosareResult;
        return $this;
    }
}
