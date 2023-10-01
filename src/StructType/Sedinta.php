<?php

namespace PortalJustRomania\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sedinta StructType
 * @subpackage Structs
 */
class Sedinta extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $data;
    /**
     * The departament
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $departament;
    /**
     * The complet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $complet;
    /**
     * The ora
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ora;
    /**
     * The dosare
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PortalJustRomania\ArrayType\ArrayOfSedintaDosar
     */
    public $dosare;
    /**
     * Constructor method for Sedinta
     * @uses Sedinta::setData()
     * @uses Sedinta::setDepartament()
     * @uses Sedinta::setComplet()
     * @uses Sedinta::setOra()
     * @uses Sedinta::setDosare()
     * @param string $data
     * @param string $departament
     * @param string $complet
     * @param string $ora
     * @param \PortalJustRomania\ArrayType\ArrayOfSedintaDosar $dosare
     */
    public function __construct($data = null, $departament = null, $complet = null, $ora = null, \PortalJustRomania\ArrayType\ArrayOfSedintaDosar $dosare = null)
    {
        $this
            ->setData($data)
            ->setDepartament($departament)
            ->setComplet($complet)
            ->setOra($ora)
            ->setDosare($dosare);
    }
    /**
     * Get data value
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \PortalJustRomania\StructType\Sedinta
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        return $this;
    }
    /**
     * Get departament value
     * @return string|null
     */
    public function getDepartament()
    {
        return $this->departament;
    }
    /**
     * Set departament value
     * @param string $departament
     * @return \PortalJustRomania\StructType\Sedinta
     */
    public function setDepartament($departament = null)
    {
        // validation for constraint: string
        if (!is_null($departament) && !is_string($departament)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departament, true), gettype($departament)), __LINE__);
        }
        $this->departament = $departament;
        return $this;
    }
    /**
     * Get complet value
     * @return string|null
     */
    public function getComplet()
    {
        return $this->complet;
    }
    /**
     * Set complet value
     * @param string $complet
     * @return \PortalJustRomania\StructType\Sedinta
     */
    public function setComplet($complet = null)
    {
        // validation for constraint: string
        if (!is_null($complet) && !is_string($complet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($complet, true), gettype($complet)), __LINE__);
        }
        $this->complet = $complet;
        return $this;
    }
    /**
     * Get ora value
     * @return string|null
     */
    public function getOra()
    {
        return $this->ora;
    }
    /**
     * Set ora value
     * @param string $ora
     * @return \PortalJustRomania\StructType\Sedinta
     */
    public function setOra($ora = null)
    {
        // validation for constraint: string
        if (!is_null($ora) && !is_string($ora)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ora, true), gettype($ora)), __LINE__);
        }
        $this->ora = $ora;
        return $this;
    }
    /**
     * Get dosare value
     * @return \PortalJustRomania\ArrayType\ArrayOfSedintaDosar|null
     */
    public function getDosare()
    {
        return $this->dosare;
    }
    /**
     * Set dosare value
     * @param \PortalJustRomania\ArrayType\ArrayOfSedintaDosar $dosare
     * @return \PortalJustRomania\StructType\Sedinta
     */
    public function setDosare(\PortalJustRomania\ArrayType\ArrayOfSedintaDosar $dosare = null)
    {
        $this->dosare = $dosare;
        return $this;
    }
}
