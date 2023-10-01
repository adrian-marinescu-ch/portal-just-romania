<?php

namespace PortalJustRomania\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDosarParte ArrayType
 * @subpackage Arrays
 */
class ArrayOfDosarParte extends AbstractStructArrayBase
{
    /**
     * The DosarParte
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \PortalJustRomania\StructType\DosarParte[]
     */
    public $DosarParte;
    /**
     * Constructor method for ArrayOfDosarParte
     * @uses ArrayOfDosarParte::setDosarParte()
     * @param \PortalJustRomania\StructType\DosarParte[] $dosarParte
     */
    public function __construct(array $dosarParte = array())
    {
        $this
            ->setDosarParte($dosarParte);
    }
    /**
     * Get DosarParte value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \PortalJustRomania\StructType\DosarParte[]|null
     */
    public function getDosarParte()
    {
        return isset($this->DosarParte) ? $this->DosarParte : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDosarParte method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDosarParte method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDosarParteForArrayConstraintsFromSetDosarParte(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDosarParteDosarParteItem) {
            // validation for constraint: itemType
            if (!$arrayOfDosarParteDosarParteItem instanceof \PortalJustRomania\StructType\DosarParte) {
                $invalidValues[] = is_object($arrayOfDosarParteDosarParteItem) ? get_class($arrayOfDosarParteDosarParteItem) : sprintf('%s(%s)', gettype($arrayOfDosarParteDosarParteItem), var_export($arrayOfDosarParteDosarParteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DosarParte property can only contain items of type \PortalJustRomania\StructType\DosarParte, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DosarParte value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \PortalJustRomania\StructType\DosarParte[] $dosarParte
     * @return \PortalJustRomania\ArrayType\ArrayOfDosarParte
     */
    public function setDosarParte(array $dosarParte = array())
    {
        // validation for constraint: array
        if ('' !== ($dosarParteArrayErrorMessage = self::validateDosarParteForArrayConstraintsFromSetDosarParte($dosarParte))) {
            throw new \InvalidArgumentException($dosarParteArrayErrorMessage, __LINE__);
        }
        if (is_null($dosarParte) || (is_array($dosarParte) && empty($dosarParte))) {
            unset($this->DosarParte);
        } else {
            $this->DosarParte = $dosarParte;
        }
        return $this;
    }
    /**
     * Add item to DosarParte value
     * @throws \InvalidArgumentException
     * @param \PortalJustRomania\StructType\DosarParte $item
     * @return \PortalJustRomania\ArrayType\ArrayOfDosarParte
     */
    public function addToDosarParte(\PortalJustRomania\StructType\DosarParte $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PortalJustRomania\StructType\DosarParte) {
            throw new \InvalidArgumentException(sprintf('The DosarParte property can only contain items of type \PortalJustRomania\StructType\DosarParte, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DosarParte[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PortalJustRomania\StructType\DosarParte|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PortalJustRomania\StructType\DosarParte|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PortalJustRomania\StructType\DosarParte|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PortalJustRomania\StructType\DosarParte|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PortalJustRomania\StructType\DosarParte|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DosarParte
     */
    public function getAttributeName()
    {
        return 'DosarParte';
    }
}
