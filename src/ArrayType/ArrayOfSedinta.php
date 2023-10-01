<?php

namespace PortalJustRomania\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSedinta ArrayType
 * @subpackage Arrays
 */
class ArrayOfSedinta extends AbstractStructArrayBase
{
    /**
     * The Sedinta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \PortalJustRomania\StructType\Sedinta[]
     */
    public $Sedinta;
    /**
     * Constructor method for ArrayOfSedinta
     * @uses ArrayOfSedinta::setSedinta()
     * @param \PortalJustRomania\StructType\Sedinta[] $sedinta
     */
    public function __construct(array $sedinta = array())
    {
        $this
            ->setSedinta($sedinta);
    }
    /**
     * Get Sedinta value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \PortalJustRomania\StructType\Sedinta[]|null
     */
    public function getSedinta()
    {
        return isset($this->Sedinta) ? $this->Sedinta : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSedinta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSedinta method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSedintaForArrayConstraintsFromSetSedinta(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSedintaSedintaItem) {
            // validation for constraint: itemType
            if (!$arrayOfSedintaSedintaItem instanceof \PortalJustRomania\StructType\Sedinta) {
                $invalidValues[] = is_object($arrayOfSedintaSedintaItem) ? get_class($arrayOfSedintaSedintaItem) : sprintf('%s(%s)', gettype($arrayOfSedintaSedintaItem), var_export($arrayOfSedintaSedintaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sedinta property can only contain items of type \PortalJustRomania\StructType\Sedinta, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Sedinta value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \PortalJustRomania\StructType\Sedinta[] $sedinta
     * @return \PortalJustRomania\ArrayType\ArrayOfSedinta
     */
    public function setSedinta(array $sedinta = array())
    {
        // validation for constraint: array
        if ('' !== ($sedintaArrayErrorMessage = self::validateSedintaForArrayConstraintsFromSetSedinta($sedinta))) {
            throw new \InvalidArgumentException($sedintaArrayErrorMessage, __LINE__);
        }
        if (is_null($sedinta) || (is_array($sedinta) && empty($sedinta))) {
            unset($this->Sedinta);
        } else {
            $this->Sedinta = $sedinta;
        }
        return $this;
    }
    /**
     * Add item to Sedinta value
     * @throws \InvalidArgumentException
     * @param \PortalJustRomania\StructType\Sedinta $item
     * @return \PortalJustRomania\ArrayType\ArrayOfSedinta
     */
    public function addToSedinta(\PortalJustRomania\StructType\Sedinta $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PortalJustRomania\StructType\Sedinta) {
            throw new \InvalidArgumentException(sprintf('The Sedinta property can only contain items of type \PortalJustRomania\StructType\Sedinta, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Sedinta[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PortalJustRomania\StructType\Sedinta|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PortalJustRomania\StructType\Sedinta|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PortalJustRomania\StructType\Sedinta|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PortalJustRomania\StructType\Sedinta|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PortalJustRomania\StructType\Sedinta|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Sedinta
     */
    public function getAttributeName()
    {
        return 'Sedinta';
    }
}
