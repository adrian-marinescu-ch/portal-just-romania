<?php

namespace PortalJustRomania\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDosarSedinta ArrayType
 * @subpackage Arrays
 */
class ArrayOfDosarSedinta extends AbstractStructArrayBase
{
    /**
     * The DosarSedinta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \PortalJustRomania\StructType\DosarSedinta[]
     */
    public $DosarSedinta;
    /**
     * Constructor method for ArrayOfDosarSedinta
     * @uses ArrayOfDosarSedinta::setDosarSedinta()
     * @param \PortalJustRomania\StructType\DosarSedinta[] $dosarSedinta
     */
    public function __construct(array $dosarSedinta = array())
    {
        $this
            ->setDosarSedinta($dosarSedinta);
    }
    /**
     * Get DosarSedinta value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \PortalJustRomania\StructType\DosarSedinta[]|null
     */
    public function getDosarSedinta()
    {
        return isset($this->DosarSedinta) ? $this->DosarSedinta : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDosarSedinta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDosarSedinta method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDosarSedintaForArrayConstraintsFromSetDosarSedinta(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDosarSedintaDosarSedintaItem) {
            // validation for constraint: itemType
            if (!$arrayOfDosarSedintaDosarSedintaItem instanceof \PortalJustRomania\StructType\DosarSedinta) {
                $invalidValues[] = is_object($arrayOfDosarSedintaDosarSedintaItem) ? get_class($arrayOfDosarSedintaDosarSedintaItem) : sprintf('%s(%s)', gettype($arrayOfDosarSedintaDosarSedintaItem), var_export($arrayOfDosarSedintaDosarSedintaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DosarSedinta property can only contain items of type \PortalJustRomania\StructType\DosarSedinta, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DosarSedinta value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \PortalJustRomania\StructType\DosarSedinta[] $dosarSedinta
     * @return \PortalJustRomania\ArrayType\ArrayOfDosarSedinta
     */
    public function setDosarSedinta(array $dosarSedinta = array())
    {
        // validation for constraint: array
        if ('' !== ($dosarSedintaArrayErrorMessage = self::validateDosarSedintaForArrayConstraintsFromSetDosarSedinta($dosarSedinta))) {
            throw new \InvalidArgumentException($dosarSedintaArrayErrorMessage, __LINE__);
        }
        if (is_null($dosarSedinta) || (is_array($dosarSedinta) && empty($dosarSedinta))) {
            unset($this->DosarSedinta);
        } else {
            $this->DosarSedinta = $dosarSedinta;
        }
        return $this;
    }
    /**
     * Add item to DosarSedinta value
     * @throws \InvalidArgumentException
     * @param \PortalJustRomania\StructType\DosarSedinta $item
     * @return \PortalJustRomania\ArrayType\ArrayOfDosarSedinta
     */
    public function addToDosarSedinta(\PortalJustRomania\StructType\DosarSedinta $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PortalJustRomania\StructType\DosarSedinta) {
            throw new \InvalidArgumentException(sprintf('The DosarSedinta property can only contain items of type \PortalJustRomania\StructType\DosarSedinta, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DosarSedinta[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PortalJustRomania\StructType\DosarSedinta|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PortalJustRomania\StructType\DosarSedinta|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PortalJustRomania\StructType\DosarSedinta|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PortalJustRomania\StructType\DosarSedinta|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PortalJustRomania\StructType\DosarSedinta|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DosarSedinta
     */
    public function getAttributeName()
    {
        return 'DosarSedinta';
    }
}
