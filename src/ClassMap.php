<?php

namespace PortalJustRomania;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'HelloWorld' => '\\PortalJustRomania\\StructType\\HelloWorld',
            'HelloWorldResponse' => '\\PortalJustRomania\\StructType\\HelloWorldResponse',
            'CautareDosare' => '\\PortalJustRomania\\StructType\\CautareDosare',
            'CautareDosareResponse' => '\\PortalJustRomania\\StructType\\CautareDosareResponse',
            'ArrayOfDosar' => '\\PortalJustRomania\\ArrayType\\ArrayOfDosar',
            'Dosar' => '\\PortalJustRomania\\StructType\\Dosar',
            'ArrayOfDosarParte' => '\\PortalJustRomania\\ArrayType\\ArrayOfDosarParte',
            'DosarParte' => '\\PortalJustRomania\\StructType\\DosarParte',
            'ArrayOfDosarSedinta' => '\\PortalJustRomania\\ArrayType\\ArrayOfDosarSedinta',
            'DosarSedinta' => '\\PortalJustRomania\\StructType\\DosarSedinta',
            'ArrayOfDosarCaleAtac' => '\\PortalJustRomania\\ArrayType\\ArrayOfDosarCaleAtac',
            'DosarCaleAtac' => '\\PortalJustRomania\\StructType\\DosarCaleAtac',
            'CautareDosare2' => '\\PortalJustRomania\\StructType\\CautareDosare2',
            'CautareDosare2Response' => '\\PortalJustRomania\\StructType\\CautareDosare2Response',
            'CautareSedinte' => '\\PortalJustRomania\\StructType\\CautareSedinte',
            'CautareSedinteResponse' => '\\PortalJustRomania\\StructType\\CautareSedinteResponse',
            'ArrayOfSedinta' => '\\PortalJustRomania\\ArrayType\\ArrayOfSedinta',
            'Sedinta' => '\\PortalJustRomania\\StructType\\Sedinta',
            'ArrayOfSedintaDosar' => '\\PortalJustRomania\\ArrayType\\ArrayOfSedintaDosar',
            'SedintaDosar' => '\\PortalJustRomania\\StructType\\SedintaDosar',
        );
    }
}
