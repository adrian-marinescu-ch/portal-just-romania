<?php

namespace PortalJustRomania\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DosarParte StructType
 * @subpackage Structs
 */
class DosarParte extends AbstractStructBase
{
    /**
     * The nume
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $nume;
    /**
     * The calitateParte
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $calitateParte;
    /**
     * Constructor method for DosarParte
     * @uses DosarParte::setNume()
     * @uses DosarParte::setCalitateParte()
     * @param string $nume
     * @param string $calitateParte
     */
    public function __construct($nume = null, $calitateParte = null)
    {
        $this
            ->setNume($nume)
            ->setCalitateParte($calitateParte);
    }
    /**
     * Get nume value
     * @return string|null
     */
    public function getNume()
    {
        return $this->nume;
    }
    /**
     * Set nume value
     * @param string $nume
     * @return \PortalJustRomania\StructType\DosarParte
     */
    public function setNume($nume = null)
    {
        // validation for constraint: string
        if (!is_null($nume) && !is_string($nume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nume, true), gettype($nume)), __LINE__);
        }
        $this->nume = $nume;
        return $this;
    }
    /**
     * Get calitateParte value
     * @return string|null
     */
    public function getCalitateParte()
    {
        return $this->calitateParte;
    }
    /**
     * Set calitateParte value
     * @param string $calitateParte
     * @return \PortalJustRomania\StructType\DosarParte
     */
    public function setCalitateParte($calitateParte = null)
    {
        // validation for constraint: string
        if (!is_null($calitateParte) && !is_string($calitateParte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calitateParte, true), gettype($calitateParte)), __LINE__);
        }
        $this->calitateParte = $calitateParte;
        return $this;
    }
}
