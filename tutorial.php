<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://portalquery.just.ro/query.asmx?WSDL',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://portalquery.just.ro/query.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \PortalJustRomania\ClassMap::get(),
);
/**
 * Samples for Hello ServiceType
 */
$hello = new \PortalJustRomania\ServiceType\Hello($options);
/**
 * Sample call for HelloWorld operation/method
 */
if ($hello->HelloWorld(new \PortalJustRomania\StructType\HelloWorld()) !== false) {
    print_r($hello->getResult());
} else {
    print_r($hello->getLastError());
}
/**
 * Samples for Cautare ServiceType
 */
$cautare = new \PortalJustRomania\ServiceType\Cautare($options);
/**
 * Sample call for CautareDosare operation/method
 */
if ($cautare->CautareDosare(new \PortalJustRomania\StructType\CautareDosare()) !== false) {
    print_r($cautare->getResult());
} else {
    print_r($cautare->getLastError());
}
/**
 * Sample call for CautareDosare2 operation/method
 */
if ($cautare->CautareDosare2(new \PortalJustRomania\StructType\CautareDosare2()) !== false) {
    print_r($cautare->getResult());
} else {
    print_r($cautare->getLastError());
}
/**
 * Sample call for CautareSedinte operation/method
 */
if ($cautare->CautareSedinte(new \PortalJustRomania\StructType\CautareSedinte()) !== false) {
    print_r($cautare->getResult());
} else {
    print_r($cautare->getLastError());
}
