<?php

namespace PortalJustRomania\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SedintaDosar StructType
 * @subpackage Structs
 */
class SedintaDosar extends AbstractStructBase
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
     * The categorieCaz
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $categorieCaz;
    /**
     * The stadiuProcesual
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $stadiuProcesual;
    /**
     * The numar
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $numar;
    /**
     * The numar_vechi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $numar_vechi;
    /**
     * The ora
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ora;
    /**
     * The categorieCazNume
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $categorieCazNume;
    /**
     * The stadiuProcesualNume
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $stadiuProcesualNume;
    /**
     * Constructor method for SedintaDosar
     * @uses SedintaDosar::setData()
     * @uses SedintaDosar::setCategorieCaz()
     * @uses SedintaDosar::setStadiuProcesual()
     * @uses SedintaDosar::setNumar()
     * @uses SedintaDosar::setNumar_vechi()
     * @uses SedintaDosar::setOra()
     * @uses SedintaDosar::setCategorieCazNume()
     * @uses SedintaDosar::setStadiuProcesualNume()
     * @param string $data
     * @param string $categorieCaz
     * @param string $stadiuProcesual
     * @param string $numar
     * @param string $numar_vechi
     * @param string $ora
     * @param string $categorieCazNume
     * @param string $stadiuProcesualNume
     */
    public function __construct($data = null, $categorieCaz = null, $stadiuProcesual = null, $numar = null, $numar_vechi = null, $ora = null, $categorieCazNume = null, $stadiuProcesualNume = null)
    {
        $this
            ->setData($data)
            ->setCategorieCaz($categorieCaz)
            ->setStadiuProcesual($stadiuProcesual)
            ->setNumar($numar)
            ->setNumar_vechi($numar_vechi)
            ->setOra($ora)
            ->setCategorieCazNume($categorieCazNume)
            ->setStadiuProcesualNume($stadiuProcesualNume);
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
     * @return \PortalJustRomania\StructType\SedintaDosar
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
     * Get categorieCaz value
     * @return string
     */
    public function getCategorieCaz()
    {
        return $this->categorieCaz;
    }
    /**
     * Set categorieCaz value
     * @uses \PortalJustRomania\EnumType\CategorieCaz::valueIsValid()
     * @uses \PortalJustRomania\EnumType\CategorieCaz::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $categorieCaz
     * @return \PortalJustRomania\StructType\SedintaDosar
     */
    public function setCategorieCaz($categorieCaz = null)
    {
        // validation for constraint: enumeration
        if (!\PortalJustRomania\EnumType\CategorieCaz::valueIsValid($categorieCaz)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PortalJustRomania\EnumType\CategorieCaz', is_array($categorieCaz) ? implode(', ', $categorieCaz) : var_export($categorieCaz, true), implode(', ', \PortalJustRomania\EnumType\CategorieCaz::getValidValues())), __LINE__);
        }
        $this->categorieCaz = $categorieCaz;
        return $this;
    }
    /**
     * Get stadiuProcesual value
     * @return string
     */
    public function getStadiuProcesual()
    {
        return $this->stadiuProcesual;
    }
    /**
     * Set stadiuProcesual value
     * @uses \PortalJustRomania\EnumType\StadiuProcesual::valueIsValid()
     * @uses \PortalJustRomania\EnumType\StadiuProcesual::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $stadiuProcesual
     * @return \PortalJustRomania\StructType\SedintaDosar
     */
    public function setStadiuProcesual($stadiuProcesual = null)
    {
        // validation for constraint: enumeration
        if (!\PortalJustRomania\EnumType\StadiuProcesual::valueIsValid($stadiuProcesual)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PortalJustRomania\EnumType\StadiuProcesual', is_array($stadiuProcesual) ? implode(', ', $stadiuProcesual) : var_export($stadiuProcesual, true), implode(', ', \PortalJustRomania\EnumType\StadiuProcesual::getValidValues())), __LINE__);
        }
        $this->stadiuProcesual = $stadiuProcesual;
        return $this;
    }
    /**
     * Get numar value
     * @return string|null
     */
    public function getNumar()
    {
        return $this->numar;
    }
    /**
     * Set numar value
     * @param string $numar
     * @return \PortalJustRomania\StructType\SedintaDosar
     */
    public function setNumar($numar = null)
    {
        // validation for constraint: string
        if (!is_null($numar) && !is_string($numar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numar, true), gettype($numar)), __LINE__);
        }
        $this->numar = $numar;
        return $this;
    }
    /**
     * Get numar_vechi value
     * @return string|null
     */
    public function getNumar_vechi()
    {
        return $this->numar_vechi;
    }
    /**
     * Set numar_vechi value
     * @param string $numar_vechi
     * @return \PortalJustRomania\StructType\SedintaDosar
     */
    public function setNumar_vechi($numar_vechi = null)
    {
        // validation for constraint: string
        if (!is_null($numar_vechi) && !is_string($numar_vechi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numar_vechi, true), gettype($numar_vechi)), __LINE__);
        }
        $this->numar_vechi = $numar_vechi;
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
     * @return \PortalJustRomania\StructType\SedintaDosar
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
     * Get categorieCazNume value
     * @return string|null
     */
    public function getCategorieCazNume()
    {
        return $this->categorieCazNume;
    }
    /**
     * Set categorieCazNume value
     * @param string $categorieCazNume
     * @return \PortalJustRomania\StructType\SedintaDosar
     */
    public function setCategorieCazNume($categorieCazNume = null)
    {
        // validation for constraint: string
        if (!is_null($categorieCazNume) && !is_string($categorieCazNume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categorieCazNume, true), gettype($categorieCazNume)), __LINE__);
        }
        $this->categorieCazNume = $categorieCazNume;
        return $this;
    }
    /**
     * Get stadiuProcesualNume value
     * @return string|null
     */
    public function getStadiuProcesualNume()
    {
        return $this->stadiuProcesualNume;
    }
    /**
     * Set stadiuProcesualNume value
     * @param string $stadiuProcesualNume
     * @return \PortalJustRomania\StructType\SedintaDosar
     */
    public function setStadiuProcesualNume($stadiuProcesualNume = null)
    {
        // validation for constraint: string
        if (!is_null($stadiuProcesualNume) && !is_string($stadiuProcesualNume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stadiuProcesualNume, true), gettype($stadiuProcesualNume)), __LINE__);
        }
        $this->stadiuProcesualNume = $stadiuProcesualNume;
        return $this;
    }
}
