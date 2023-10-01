<?php

namespace PortalJustRomania\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CautareSedinte StructType
 * @subpackage Structs
 */
class CautareSedinte extends AbstractStructBase
{
    /**
     * The dataSedinta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $dataSedinta;
    /**
     * The institutie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $institutie;
    /**
     * Constructor method for CautareSedinte
     * @uses CautareSedinte::setDataSedinta()
     * @uses CautareSedinte::setInstitutie()
     * @param string $dataSedinta
     * @param string $institutie
     */
    public function __construct($dataSedinta = null, $institutie = null)
    {
        $this
            ->setDataSedinta($dataSedinta)
            ->setInstitutie($institutie);
    }
    /**
     * Get dataSedinta value
     * @return string
     */
    public function getDataSedinta()
    {
        return $this->dataSedinta;
    }
    /**
     * Set dataSedinta value
     * @param string $dataSedinta
     * @return \PortalJustRomania\StructType\CautareSedinte
     */
    public function setDataSedinta($dataSedinta = null)
    {
        // validation for constraint: string
        if (!is_null($dataSedinta) && !is_string($dataSedinta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataSedinta, true), gettype($dataSedinta)), __LINE__);
        }
        $this->dataSedinta = $dataSedinta;
        return $this;
    }
    /**
     * Get institutie value
     * @return string
     */
    public function getInstitutie()
    {
        return $this->institutie;
    }
    /**
     * Set institutie value
     * @uses \PortalJustRomania\EnumType\Institutie::valueIsValid()
     * @uses \PortalJustRomania\EnumType\Institutie::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $institutie
     * @return \PortalJustRomania\StructType\CautareSedinte
     */
    public function setInstitutie($institutie = null)
    {
        // validation for constraint: enumeration
        if (!\PortalJustRomania\EnumType\Institutie::valueIsValid($institutie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PortalJustRomania\EnumType\Institutie', is_array($institutie) ? implode(', ', $institutie) : var_export($institutie, true), implode(', ', \PortalJustRomania\EnumType\Institutie::getValidValues())), __LINE__);
        }
        $this->institutie = $institutie;
        return $this;
    }
}
