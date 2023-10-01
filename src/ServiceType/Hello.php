<?php

namespace PortalJustRomania\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Hello ServiceType
 * @subpackage Services
 */
class Hello extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named HelloWorld
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PortalJustRomania\StructType\HelloWorld $parameters
     * @return \PortalJustRomania\StructType\HelloWorldResponse|bool
     */
    public function HelloWorld(\PortalJustRomania\StructType\HelloWorld $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HelloWorld($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PortalJustRomania\StructType\HelloWorldResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
