<?php

namespace PortalJustRomania\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CautareDosare StructType
 * @subpackage Structs
 */
class CautareDosare extends AbstractStructBase
{
    /**
     * The institutie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $institutie;
    /**
     * The dataStart
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $dataStart;
    /**
     * The dataStop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $dataStop;
    /**
     * The numarDosar
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $numarDosar;
    /**
     * The obiectDosar
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $obiectDosar;
    /**
     * The numeParte
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $numeParte;
    /**
     * Constructor method for CautareDosare
     * @uses CautareDosare::setInstitutie()
     * @uses CautareDosare::setDataStart()
     * @uses CautareDosare::setDataStop()
     * @uses CautareDosare::setNumarDosar()
     * @uses CautareDosare::setObiectDosar()
     * @uses CautareDosare::setNumeParte()
     * @param string $institutie
     * @param string $dataStart
     * @param string $dataStop
     * @param string $numarDosar
     * @param string $obiectDosar
     * @param string $numeParte
     */
    public function __construct($institutie = null, $dataStart = null, $dataStop = null, $numarDosar = null, $obiectDosar = null, $numeParte = null)
    {
        $this
            ->setInstitutie($institutie)
            ->setDataStart($dataStart)
            ->setDataStop($dataStop)
            ->setNumarDosar($numarDosar)
            ->setObiectDosar($obiectDosar)
            ->setNumeParte($numeParte);
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
     * @return \PortalJustRomania\StructType\CautareDosare
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
    /**
     * Get dataStart value
     * @return string
     */
    public function getDataStart()
    {
        return $this->dataStart;
    }
    /**
     * Set dataStart value
     * @param string $dataStart
     * @return \PortalJustRomania\StructType\CautareDosare
     */
    public function setDataStart($dataStart = null)
    {
        // validation for constraint: string
        if (!is_null($dataStart) && !is_string($dataStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataStart, true), gettype($dataStart)), __LINE__);
        }
        $this->dataStart = $dataStart;
        return $this;
    }
    /**
     * Get dataStop value
     * @return string
     */
    public function getDataStop()
    {
        return $this->dataStop;
    }
    /**
     * Set dataStop value
     * @param string $dataStop
     * @return \PortalJustRomania\StructType\CautareDosare
     */
    public function setDataStop($dataStop = null)
    {
        // validation for constraint: string
        if (!is_null($dataStop) && !is_string($dataStop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataStop, true), gettype($dataStop)), __LINE__);
        }
        $this->dataStop = $dataStop;
        return $this;
    }
    /**
     * Get numarDosar value
     * @return string|null
     */
    public function getNumarDosar()
    {
        return $this->numarDosar;
    }
    /**
     * Set numarDosar value
     * @param string $numarDosar
     * @return \PortalJustRomania\StructType\CautareDosare
     */
    public function setNumarDosar($numarDosar = null)
    {
        // validation for constraint: string
        if (!is_null($numarDosar) && !is_string($numarDosar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numarDosar, true), gettype($numarDosar)), __LINE__);
        }
        $this->numarDosar = $numarDosar;
        return $this;
    }
    /**
     * Get obiectDosar value
     * @return string|null
     */
    public function getObiectDosar()
    {
        return $this->obiectDosar;
    }
    /**
     * Set obiectDosar value
     * @param string $obiectDosar
     * @return \PortalJustRomania\StructType\CautareDosare
     */
    public function setObiectDosar($obiectDosar = null)
    {
        // validation for constraint: string
        if (!is_null($obiectDosar) && !is_string($obiectDosar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obiectDosar, true), gettype($obiectDosar)), __LINE__);
        }
        $this->obiectDosar = $obiectDosar;
        return $this;
    }
    /**
     * Get numeParte value
     * @return string|null
     */
    public function getNumeParte()
    {
        return $this->numeParte;
    }
    /**
     * Set numeParte value
     * @param string $numeParte
     * @return \PortalJustRomania\StructType\CautareDosare
     */
    public function setNumeParte($numeParte = null)
    {
        // validation for constraint: string
        if (!is_null($numeParte) && !is_string($numeParte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeParte, true), gettype($numeParte)), __LINE__);
        }
        $this->numeParte = $numeParte;
        return $this;
    }
}
