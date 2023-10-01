<?php

namespace PortalJustRomania\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDosarCaleAtac ArrayType
 * @subpackage Arrays
 */
class ArrayOfDosarCaleAtac extends AbstractStructArrayBase
{
    /**
     * The DosarCaleAtac
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \PortalJustRomania\StructType\DosarCaleAtac[]
     */
    public $DosarCaleAtac;
    /**
     * Constructor method for ArrayOfDosarCaleAtac
     * @uses ArrayOfDosarCaleAtac::setDosarCaleAtac()
     * @param \PortalJustRomania\StructType\DosarCaleAtac[] $dosarCaleAtac
     */
    public function __construct(array $dosarCaleAtac = array())
    {
        $this
            ->setDosarCaleAtac($dosarCaleAtac);
    }
    /**
     * Get DosarCaleAtac value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \PortalJustRomania\StructType\DosarCaleAtac[]|null
     */
    public function getDosarCaleAtac()
    {
        return isset($this->DosarCaleAtac) ? $this->DosarCaleAtac : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDosarCaleAtac method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDosarCaleAtac method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDosarCaleAtacForArrayConstraintsFromSetDosarCaleAtac(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDosarCaleAtacDosarCaleAtacItem) {
            // validation for constraint: itemType
            if (!$arrayOfDosarCaleAtacDosarCaleAtacItem instanceof \PortalJustRomania\StructType\DosarCaleAtac) {
                $invalidValues[] = is_object($arrayOfDosarCaleAtacDosarCaleAtacItem) ? get_class($arrayOfDosarCaleAtacDosarCaleAtacItem) : sprintf('%s(%s)', gettype($arrayOfDosarCaleAtacDosarCaleAtacItem), var_export($arrayOfDosarCaleAtacDosarCaleAtacItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DosarCaleAtac property can only contain items of type \PortalJustRomania\StructType\DosarCaleAtac, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DosarCaleAtac value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \PortalJustRomania\StructType\DosarCaleAtac[] $dosarCaleAtac
     * @return \PortalJustRomania\ArrayType\ArrayOfDosarCaleAtac
     */
    public function setDosarCaleAtac(array $dosarCaleAtac = array())
    {
        // validation for constraint: array
        if ('' !== ($dosarCaleAtacArrayErrorMessage = self::validateDosarCaleAtacForArrayConstraintsFromSetDosarCaleAtac($dosarCaleAtac))) {
            throw new \InvalidArgumentException($dosarCaleAtacArrayErrorMessage, __LINE__);
        }
        if (is_null($dosarCaleAtac) || (is_array($dosarCaleAtac) && empty($dosarCaleAtac))) {
            unset($this->DosarCaleAtac);
        } else {
            $this->DosarCaleAtac = $dosarCaleAtac;
        }
        return $this;
    }
    /**
     * Add item to DosarCaleAtac value
     * @throws \InvalidArgumentException
     * @param \PortalJustRomania\StructType\DosarCaleAtac $item
     * @return \PortalJustRomania\ArrayType\ArrayOfDosarCaleAtac
     */
    public function addToDosarCaleAtac(\PortalJustRomania\StructType\DosarCaleAtac $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PortalJustRomania\StructType\DosarCaleAtac) {
            throw new \InvalidArgumentException(sprintf('The DosarCaleAtac property can only contain items of type \PortalJustRomania\StructType\DosarCaleAtac, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DosarCaleAtac[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PortalJustRomania\StructType\DosarCaleAtac|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PortalJustRomania\StructType\DosarCaleAtac|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PortalJustRomania\StructType\DosarCaleAtac|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PortalJustRomania\StructType\DosarCaleAtac|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PortalJustRomania\StructType\DosarCaleAtac|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DosarCaleAtac
     */
    public function getAttributeName()
    {
        return 'DosarCaleAtac';
    }
}
