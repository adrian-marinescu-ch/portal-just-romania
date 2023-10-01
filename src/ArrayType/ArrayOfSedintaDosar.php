<?php

namespace PortalJustRomania\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSedintaDosar ArrayType
 * @subpackage Arrays
 */
class ArrayOfSedintaDosar extends AbstractStructArrayBase
{
    /**
     * The SedintaDosar
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \PortalJustRomania\StructType\SedintaDosar[]
     */
    public $SedintaDosar;
    /**
     * Constructor method for ArrayOfSedintaDosar
     * @uses ArrayOfSedintaDosar::setSedintaDosar()
     * @param \PortalJustRomania\StructType\SedintaDosar[] $sedintaDosar
     */
    public function __construct(array $sedintaDosar = array())
    {
        $this
            ->setSedintaDosar($sedintaDosar);
    }
    /**
     * Get SedintaDosar value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \PortalJustRomania\StructType\SedintaDosar[]|null
     */
    public function getSedintaDosar()
    {
        return isset($this->SedintaDosar) ? $this->SedintaDosar : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSedintaDosar method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSedintaDosar method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSedintaDosarForArrayConstraintsFromSetSedintaDosar(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSedintaDosarSedintaDosarItem) {
            // validation for constraint: itemType
            if (!$arrayOfSedintaDosarSedintaDosarItem instanceof \PortalJustRomania\StructType\SedintaDosar) {
                $invalidValues[] = is_object($arrayOfSedintaDosarSedintaDosarItem) ? get_class($arrayOfSedintaDosarSedintaDosarItem) : sprintf('%s(%s)', gettype($arrayOfSedintaDosarSedintaDosarItem), var_export($arrayOfSedintaDosarSedintaDosarItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SedintaDosar property can only contain items of type \PortalJustRomania\StructType\SedintaDosar, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SedintaDosar value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \PortalJustRomania\StructType\SedintaDosar[] $sedintaDosar
     * @return \PortalJustRomania\ArrayType\ArrayOfSedintaDosar
     */
    public function setSedintaDosar(array $sedintaDosar = array())
    {
        // validation for constraint: array
        if ('' !== ($sedintaDosarArrayErrorMessage = self::validateSedintaDosarForArrayConstraintsFromSetSedintaDosar($sedintaDosar))) {
            throw new \InvalidArgumentException($sedintaDosarArrayErrorMessage, __LINE__);
        }
        if (is_null($sedintaDosar) || (is_array($sedintaDosar) && empty($sedintaDosar))) {
            unset($this->SedintaDosar);
        } else {
            $this->SedintaDosar = $sedintaDosar;
        }
        return $this;
    }
    /**
     * Add item to SedintaDosar value
     * @throws \InvalidArgumentException
     * @param \PortalJustRomania\StructType\SedintaDosar $item
     * @return \PortalJustRomania\ArrayType\ArrayOfSedintaDosar
     */
    public function addToSedintaDosar(\PortalJustRomania\StructType\SedintaDosar $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PortalJustRomania\StructType\SedintaDosar) {
            throw new \InvalidArgumentException(sprintf('The SedintaDosar property can only contain items of type \PortalJustRomania\StructType\SedintaDosar, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SedintaDosar[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PortalJustRomania\StructType\SedintaDosar|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PortalJustRomania\StructType\SedintaDosar|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PortalJustRomania\StructType\SedintaDosar|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PortalJustRomania\StructType\SedintaDosar|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PortalJustRomania\StructType\SedintaDosar|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SedintaDosar
     */
    public function getAttributeName()
    {
        return 'SedintaDosar';
    }
}
