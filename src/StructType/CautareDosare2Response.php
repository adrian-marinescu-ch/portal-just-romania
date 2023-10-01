<?php

namespace PortalJustRomania\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CautareDosare2Response StructType
 * @subpackage Structs
 */
class CautareDosare2Response extends AbstractStructBase
{
    /**
     * The CautareDosare2Result
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PortalJustRomania\ArrayType\ArrayOfDosar
     */
    public $CautareDosare2Result;
    /**
     * Constructor method for CautareDosare2Response
     * @uses CautareDosare2Response::setCautareDosare2Result()
     * @param \PortalJustRomania\ArrayType\ArrayOfDosar $cautareDosare2Result
     */
    public function __construct(\PortalJustRomania\ArrayType\ArrayOfDosar $cautareDosare2Result = null)
    {
        $this
            ->setCautareDosare2Result($cautareDosare2Result);
    }
    /**
     * Get CautareDosare2Result value
     * @return \PortalJustRomania\ArrayType\ArrayOfDosar|null
     */
    public function getCautareDosare2Result()
    {
        return $this->CautareDosare2Result;
    }
    /**
     * Set CautareDosare2Result value
     * @param \PortalJustRomania\ArrayType\ArrayOfDosar $cautareDosare2Result
     * @return \PortalJustRomania\StructType\CautareDosare2Response
     */
    public function setCautareDosare2Result(\PortalJustRomania\ArrayType\ArrayOfDosar $cautareDosare2Result = null)
    {
        $this->CautareDosare2Result = $cautareDosare2Result;
        return $this;
    }
}
