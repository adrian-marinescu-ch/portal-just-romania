<?php

namespace PortalJustRomania\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDosar ArrayType
 * @subpackage Arrays
 */
class ArrayOfDosar extends AbstractStructArrayBase
{
    /**
     * The Dosar
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \PortalJustRomania\StructType\Dosar[]
     */
    public $Dosar;
    /**
     * Constructor method for ArrayOfDosar
     * @uses ArrayOfDosar::setDosar()
     * @param \PortalJustRomania\StructType\Dosar[] $dosar
     */
    public function __construct(array $dosar = array())
    {
        $this
            ->setDosar($dosar);
    }
    /**
     * Get Dosar value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \PortalJustRomania\StructType\Dosar[]|null
     */
    public function getDosar()
    {
        return isset($this->Dosar) ? $this->Dosar : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDosar method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDosar method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDosarForArrayConstraintsFromSetDosar(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDosarDosarItem) {
            // validation for constraint: itemType
            if (!$arrayOfDosarDosarItem instanceof \PortalJustRomania\StructType\Dosar) {
                $invalidValues[] = is_object($arrayOfDosarDosarItem) ? get_class($arrayOfDosarDosarItem) : sprintf('%s(%s)', gettype($arrayOfDosarDosarItem), var_export($arrayOfDosarDosarItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Dosar property can only contain items of type \PortalJustRomania\StructType\Dosar, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Dosar value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \PortalJustRomania\StructType\Dosar[] $dosar
     * @return \PortalJustRomania\ArrayType\ArrayOfDosar
     */
    public function setDosar(array $dosar = array())
    {
        // validation for constraint: array
        if ('' !== ($dosarArrayErrorMessage = self::validateDosarForArrayConstraintsFromSetDosar($dosar))) {
            throw new \InvalidArgumentException($dosarArrayErrorMessage, __LINE__);
        }
        if (is_null($dosar) || (is_array($dosar) && empty($dosar))) {
            unset($this->Dosar);
        } else {
            $this->Dosar = $dosar;
        }
        return $this;
    }
    /**
     * Add item to Dosar value
     * @throws \InvalidArgumentException
     * @param \PortalJustRomania\StructType\Dosar $item
     * @return \PortalJustRomania\ArrayType\ArrayOfDosar
     */
    public function addToDosar(\PortalJustRomania\StructType\Dosar $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PortalJustRomania\StructType\Dosar) {
            throw new \InvalidArgumentException(sprintf('The Dosar property can only contain items of type \PortalJustRomania\StructType\Dosar, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Dosar[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PortalJustRomania\StructType\Dosar|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PortalJustRomania\StructType\Dosar|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PortalJustRomania\StructType\Dosar|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PortalJustRomania\StructType\Dosar|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PortalJustRomania\StructType\Dosar|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Dosar
     */
    public function getAttributeName()
    {
        return 'Dosar';
    }
}
