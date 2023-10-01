<?php

namespace PortalJustRomania\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DosarCaleAtac StructType
 * @subpackage Structs
 */
class DosarCaleAtac extends AbstractStructBase
{
    /**
     * The dataDeclarare
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $dataDeclarare;
    /**
     * The parteDeclaratoare
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $parteDeclaratoare;
    /**
     * The tipCaleAtac
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $tipCaleAtac;
    /**
     * Constructor method for DosarCaleAtac
     * @uses DosarCaleAtac::setDataDeclarare()
     * @uses DosarCaleAtac::setParteDeclaratoare()
     * @uses DosarCaleAtac::setTipCaleAtac()
     * @param string $dataDeclarare
     * @param string $parteDeclaratoare
     * @param string $tipCaleAtac
     */
    public function __construct($dataDeclarare = null, $parteDeclaratoare = null, $tipCaleAtac = null)
    {
        $this
            ->setDataDeclarare($dataDeclarare)
            ->setParteDeclaratoare($parteDeclaratoare)
            ->setTipCaleAtac($tipCaleAtac);
    }
    /**
     * Get dataDeclarare value
     * @return string
     */
    public function getDataDeclarare()
    {
        return $this->dataDeclarare;
    }
    /**
     * Set dataDeclarare value
     * @param string $dataDeclarare
     * @return \PortalJustRomania\StructType\DosarCaleAtac
     */
    public function setDataDeclarare($dataDeclarare = null)
    {
        // validation for constraint: string
        if (!is_null($dataDeclarare) && !is_string($dataDeclarare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataDeclarare, true), gettype($dataDeclarare)), __LINE__);
        }
        $this->dataDeclarare = $dataDeclarare;
        return $this;
    }
    /**
     * Get parteDeclaratoare value
     * @return string|null
     */
    public function getParteDeclaratoare()
    {
        return $this->parteDeclaratoare;
    }
    /**
     * Set parteDeclaratoare value
     * @param string $parteDeclaratoare
     * @return \PortalJustRomania\StructType\DosarCaleAtac
     */
    public function setParteDeclaratoare($parteDeclaratoare = null)
    {
        // validation for constraint: string
        if (!is_null($parteDeclaratoare) && !is_string($parteDeclaratoare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parteDeclaratoare, true), gettype($parteDeclaratoare)), __LINE__);
        }
        $this->parteDeclaratoare = $parteDeclaratoare;
        return $this;
    }
    /**
     * Get tipCaleAtac value
     * @return string|null
     */
    public function getTipCaleAtac()
    {
        return $this->tipCaleAtac;
    }
    /**
     * Set tipCaleAtac value
     * @param string $tipCaleAtac
     * @return \PortalJustRomania\StructType\DosarCaleAtac
     */
    public function setTipCaleAtac($tipCaleAtac = null)
    {
        // validation for constraint: string
        if (!is_null($tipCaleAtac) && !is_string($tipCaleAtac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipCaleAtac, true), gettype($tipCaleAtac)), __LINE__);
        }
        $this->tipCaleAtac = $tipCaleAtac;
        return $this;
    }
}
