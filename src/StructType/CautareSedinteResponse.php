<?php

namespace PortalJustRomania\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CautareSedinteResponse StructType
 * @subpackage Structs
 */
class CautareSedinteResponse extends AbstractStructBase
{
    /**
     * The CautareSedinteResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PortalJustRomania\ArrayType\ArrayOfSedinta
     */
    public $CautareSedinteResult;
    /**
     * Constructor method for CautareSedinteResponse
     * @uses CautareSedinteResponse::setCautareSedinteResult()
     * @param \PortalJustRomania\ArrayType\ArrayOfSedinta $cautareSedinteResult
     */
    public function __construct(\PortalJustRomania\ArrayType\ArrayOfSedinta $cautareSedinteResult = null)
    {
        $this
            ->setCautareSedinteResult($cautareSedinteResult);
    }
    /**
     * Get CautareSedinteResult value
     * @return \PortalJustRomania\ArrayType\ArrayOfSedinta|null
     */
    public function getCautareSedinteResult()
    {
        return $this->CautareSedinteResult;
    }
    /**
     * Set CautareSedinteResult value
     * @param \PortalJustRomania\ArrayType\ArrayOfSedinta $cautareSedinteResult
     * @return \PortalJustRomania\StructType\CautareSedinteResponse
     */
    public function setCautareSedinteResult(\PortalJustRomania\ArrayType\ArrayOfSedinta $cautareSedinteResult = null)
    {
        $this->CautareSedinteResult = $cautareSedinteResult;
        return $this;
    }
}
