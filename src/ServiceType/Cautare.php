<?php

namespace PortalJustRomania\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cautare ServiceType
 * @subpackage Services
 */
class Cautare extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CautareDosare
     * Meta information extracted from the WSDL
     * - documentation: Cautare dosare dupa numar, obiect, parte, institutie, data
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PortalJustRomania\StructType\CautareDosare $parameters
     * @return \PortalJustRomania\StructType\CautareDosareResponse|bool
     */
    public function CautareDosare(\PortalJustRomania\StructType\CautareDosare $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CautareDosare($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CautareDosare2
     * Meta information extracted from the WSDL
     * - documentation: Cautare dosare dupa numar, obiect, parte, institutie, data, data ultima modificare
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PortalJustRomania\StructType\CautareDosare2 $parameters
     * @return \PortalJustRomania\StructType\CautareDosare2Response|bool
     */
    public function CautareDosare2(\PortalJustRomania\StructType\CautareDosare2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CautareDosare2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CautareSedinte
     * Meta information extracted from the WSDL
     * - documentation: Cautare sedinte dupa data, institutie
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PortalJustRomania\StructType\CautareSedinte $parameters
     * @return \PortalJustRomania\StructType\CautareSedinteResponse|bool
     */
    public function CautareSedinte(\PortalJustRomania\StructType\CautareSedinte $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CautareSedinte($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PortalJustRomania\StructType\CautareDosare2Response|\PortalJustRomania\StructType\CautareDosareResponse|\PortalJustRomania\StructType\CautareSedinteResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
