<?php

namespace PortalJustRomania\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DosarSedinta StructType
 * @subpackage Structs
 */
class DosarSedinta extends AbstractStructBase
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
     * The dataPronuntare
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $dataPronuntare;
    /**
     * The documentSedinta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $documentSedinta;
    /**
     * The dataDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $dataDocument;
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
     * The solutie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $solutie;
    /**
     * The solutieSumar
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $solutieSumar;
    /**
     * The numarDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $numarDocument;
    /**
     * Constructor method for DosarSedinta
     * @uses DosarSedinta::setData()
     * @uses DosarSedinta::setDataPronuntare()
     * @uses DosarSedinta::setDocumentSedinta()
     * @uses DosarSedinta::setDataDocument()
     * @uses DosarSedinta::setComplet()
     * @uses DosarSedinta::setOra()
     * @uses DosarSedinta::setSolutie()
     * @uses DosarSedinta::setSolutieSumar()
     * @uses DosarSedinta::setNumarDocument()
     * @param string $data
     * @param string $dataPronuntare
     * @param string $documentSedinta
     * @param string $dataDocument
     * @param string $complet
     * @param string $ora
     * @param string $solutie
     * @param string $solutieSumar
     * @param string $numarDocument
     */
    public function __construct($data = null, $dataPronuntare = null, $documentSedinta = null, $dataDocument = null, $complet = null, $ora = null, $solutie = null, $solutieSumar = null, $numarDocument = null)
    {
        $this
            ->setData($data)
            ->setDataPronuntare($dataPronuntare)
            ->setDocumentSedinta($documentSedinta)
            ->setDataDocument($dataDocument)
            ->setComplet($complet)
            ->setOra($ora)
            ->setSolutie($solutie)
            ->setSolutieSumar($solutieSumar)
            ->setNumarDocument($numarDocument);
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
     * @return \PortalJustRomania\StructType\DosarSedinta
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
     * Get dataPronuntare value
     * @return string
     */
    public function getDataPronuntare()
    {
        return $this->dataPronuntare;
    }
    /**
     * Set dataPronuntare value
     * @param string $dataPronuntare
     * @return \PortalJustRomania\StructType\DosarSedinta
     */
    public function setDataPronuntare($dataPronuntare = null)
    {
        // validation for constraint: string
        if (!is_null($dataPronuntare) && !is_string($dataPronuntare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataPronuntare, true), gettype($dataPronuntare)), __LINE__);
        }
        $this->dataPronuntare = $dataPronuntare;
        return $this;
    }
    /**
     * Get documentSedinta value
     * @return string
     */
    public function getDocumentSedinta()
    {
        return $this->documentSedinta;
    }
    /**
     * Set documentSedinta value
     * @uses \PortalJustRomania\EnumType\DocumentSedinta::valueIsValid()
     * @uses \PortalJustRomania\EnumType\DocumentSedinta::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentSedinta
     * @return \PortalJustRomania\StructType\DosarSedinta
     */
    public function setDocumentSedinta($documentSedinta = null)
    {
        // validation for constraint: enumeration
        if (!\PortalJustRomania\EnumType\DocumentSedinta::valueIsValid($documentSedinta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PortalJustRomania\EnumType\DocumentSedinta', is_array($documentSedinta) ? implode(', ', $documentSedinta) : var_export($documentSedinta, true), implode(', ', \PortalJustRomania\EnumType\DocumentSedinta::getValidValues())), __LINE__);
        }
        $this->documentSedinta = $documentSedinta;
        return $this;
    }
    /**
     * Get dataDocument value
     * @return string
     */
    public function getDataDocument()
    {
        return $this->dataDocument;
    }
    /**
     * Set dataDocument value
     * @param string $dataDocument
     * @return \PortalJustRomania\StructType\DosarSedinta
     */
    public function setDataDocument($dataDocument = null)
    {
        // validation for constraint: string
        if (!is_null($dataDocument) && !is_string($dataDocument)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataDocument, true), gettype($dataDocument)), __LINE__);
        }
        $this->dataDocument = $dataDocument;
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
     * @return \PortalJustRomania\StructType\DosarSedinta
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
     * @return \PortalJustRomania\StructType\DosarSedinta
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
     * Get solutie value
     * @return string|null
     */
    public function getSolutie()
    {
        return $this->solutie;
    }
    /**
     * Set solutie value
     * @param string $solutie
     * @return \PortalJustRomania\StructType\DosarSedinta
     */
    public function setSolutie($solutie = null)
    {
        // validation for constraint: string
        if (!is_null($solutie) && !is_string($solutie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($solutie, true), gettype($solutie)), __LINE__);
        }
        $this->solutie = $solutie;
        return $this;
    }
    /**
     * Get solutieSumar value
     * @return string|null
     */
    public function getSolutieSumar()
    {
        return $this->solutieSumar;
    }
    /**
     * Set solutieSumar value
     * @param string $solutieSumar
     * @return \PortalJustRomania\StructType\DosarSedinta
     */
    public function setSolutieSumar($solutieSumar = null)
    {
        // validation for constraint: string
        if (!is_null($solutieSumar) && !is_string($solutieSumar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($solutieSumar, true), gettype($solutieSumar)), __LINE__);
        }
        $this->solutieSumar = $solutieSumar;
        return $this;
    }
    /**
     * Get numarDocument value
     * @return string|null
     */
    public function getNumarDocument()
    {
        return $this->numarDocument;
    }
    /**
     * Set numarDocument value
     * @param string $numarDocument
     * @return \PortalJustRomania\StructType\DosarSedinta
     */
    public function setNumarDocument($numarDocument = null)
    {
        // validation for constraint: string
        if (!is_null($numarDocument) && !is_string($numarDocument)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numarDocument, true), gettype($numarDocument)), __LINE__);
        }
        $this->numarDocument = $numarDocument;
        return $this;
    }
}
