<?php

namespace PortalJustRomania\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dosar StructType
 * @subpackage Structs
 */
class Dosar extends AbstractStructBase
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
     * The institutie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $institutie;
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
     * The dataModificare
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $dataModificare;
    /**
     * The parti
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PortalJustRomania\ArrayType\ArrayOfDosarParte
     */
    public $parti;
    /**
     * The sedinte
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PortalJustRomania\ArrayType\ArrayOfDosarSedinta
     */
    public $sedinte;
    /**
     * The caiAtac
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PortalJustRomania\ArrayType\ArrayOfDosarCaleAtac
     */
    public $caiAtac;
    /**
     * The numar
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $numar;
    /**
     * The numarVechi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $numarVechi;
    /**
     * The departament
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $departament;
    /**
     * The obiect
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $obiect;
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
     * Constructor method for Dosar
     * @uses Dosar::setData()
     * @uses Dosar::setInstitutie()
     * @uses Dosar::setCategorieCaz()
     * @uses Dosar::setStadiuProcesual()
     * @uses Dosar::setDataModificare()
     * @uses Dosar::setParti()
     * @uses Dosar::setSedinte()
     * @uses Dosar::setCaiAtac()
     * @uses Dosar::setNumar()
     * @uses Dosar::setNumarVechi()
     * @uses Dosar::setDepartament()
     * @uses Dosar::setObiect()
     * @uses Dosar::setCategorieCazNume()
     * @uses Dosar::setStadiuProcesualNume()
     * @param string $data
     * @param string $institutie
     * @param string $categorieCaz
     * @param string $stadiuProcesual
     * @param string $dataModificare
     * @param \PortalJustRomania\ArrayType\ArrayOfDosarParte $parti
     * @param \PortalJustRomania\ArrayType\ArrayOfDosarSedinta $sedinte
     * @param \PortalJustRomania\ArrayType\ArrayOfDosarCaleAtac $caiAtac
     * @param string $numar
     * @param string $numarVechi
     * @param string $departament
     * @param string $obiect
     * @param string $categorieCazNume
     * @param string $stadiuProcesualNume
     */
    public function __construct($data = null, $institutie = null, $categorieCaz = null, $stadiuProcesual = null, $dataModificare = null, \PortalJustRomania\ArrayType\ArrayOfDosarParte $parti = null, \PortalJustRomania\ArrayType\ArrayOfDosarSedinta $sedinte = null, \PortalJustRomania\ArrayType\ArrayOfDosarCaleAtac $caiAtac = null, $numar = null, $numarVechi = null, $departament = null, $obiect = null, $categorieCazNume = null, $stadiuProcesualNume = null)
    {
        $this
            ->setData($data)
            ->setInstitutie($institutie)
            ->setCategorieCaz($categorieCaz)
            ->setStadiuProcesual($stadiuProcesual)
            ->setDataModificare($dataModificare)
            ->setParti($parti)
            ->setSedinte($sedinte)
            ->setCaiAtac($caiAtac)
            ->setNumar($numar)
            ->setNumarVechi($numarVechi)
            ->setDepartament($departament)
            ->setObiect($obiect)
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
     * @return \PortalJustRomania\StructType\Dosar
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
     * @return \PortalJustRomania\StructType\Dosar
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
     * @return \PortalJustRomania\StructType\Dosar
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
     * @return \PortalJustRomania\StructType\Dosar
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
     * Get dataModificare value
     * @return string
     */
    public function getDataModificare()
    {
        return $this->dataModificare;
    }
    /**
     * Set dataModificare value
     * @param string $dataModificare
     * @return \PortalJustRomania\StructType\Dosar
     */
    public function setDataModificare($dataModificare = null)
    {
        // validation for constraint: string
        if (!is_null($dataModificare) && !is_string($dataModificare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataModificare, true), gettype($dataModificare)), __LINE__);
        }
        $this->dataModificare = $dataModificare;
        return $this;
    }
    /**
     * Get parti value
     * @return \PortalJustRomania\ArrayType\ArrayOfDosarParte|null
     */
    public function getParti()
    {
        return $this->parti;
    }
    /**
     * Set parti value
     * @param \PortalJustRomania\ArrayType\ArrayOfDosarParte $parti
     * @return \PortalJustRomania\StructType\Dosar
     */
    public function setParti(\PortalJustRomania\ArrayType\ArrayOfDosarParte $parti = null)
    {
        $this->parti = $parti;
        return $this;
    }
    /**
     * Get sedinte value
     * @return \PortalJustRomania\ArrayType\ArrayOfDosarSedinta|null
     */
    public function getSedinte()
    {
        return $this->sedinte;
    }
    /**
     * Set sedinte value
     * @param \PortalJustRomania\ArrayType\ArrayOfDosarSedinta $sedinte
     * @return \PortalJustRomania\StructType\Dosar
     */
    public function setSedinte(\PortalJustRomania\ArrayType\ArrayOfDosarSedinta $sedinte = null)
    {
        $this->sedinte = $sedinte;
        return $this;
    }
    /**
     * Get caiAtac value
     * @return \PortalJustRomania\ArrayType\ArrayOfDosarCaleAtac|null
     */
    public function getCaiAtac()
    {
        return $this->caiAtac;
    }
    /**
     * Set caiAtac value
     * @param \PortalJustRomania\ArrayType\ArrayOfDosarCaleAtac $caiAtac
     * @return \PortalJustRomania\StructType\Dosar
     */
    public function setCaiAtac(\PortalJustRomania\ArrayType\ArrayOfDosarCaleAtac $caiAtac = null)
    {
        $this->caiAtac = $caiAtac;
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
     * @return \PortalJustRomania\StructType\Dosar
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
     * Get numarVechi value
     * @return string|null
     */
    public function getNumarVechi()
    {
        return $this->numarVechi;
    }
    /**
     * Set numarVechi value
     * @param string $numarVechi
     * @return \PortalJustRomania\StructType\Dosar
     */
    public function setNumarVechi($numarVechi = null)
    {
        // validation for constraint: string
        if (!is_null($numarVechi) && !is_string($numarVechi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numarVechi, true), gettype($numarVechi)), __LINE__);
        }
        $this->numarVechi = $numarVechi;
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
     * @return \PortalJustRomania\StructType\Dosar
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
     * Get obiect value
     * @return string|null
     */
    public function getObiect()
    {
        return $this->obiect;
    }
    /**
     * Set obiect value
     * @param string $obiect
     * @return \PortalJustRomania\StructType\Dosar
     */
    public function setObiect($obiect = null)
    {
        // validation for constraint: string
        if (!is_null($obiect) && !is_string($obiect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obiect, true), gettype($obiect)), __LINE__);
        }
        $this->obiect = $obiect;
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
     * @return \PortalJustRomania\StructType\Dosar
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
     * @return \PortalJustRomania\StructType\Dosar
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
