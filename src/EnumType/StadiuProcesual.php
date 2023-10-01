<?php

namespace PortalJustRomania\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StadiuProcesual EnumType
 * @subpackage Enumerations
 */
class StadiuProcesual extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Fond'
     * @return string 'Fond'
     */
    const VALUE_FOND = 'Fond';
    /**
     * Constant for value 'Apel'
     * @return string 'Apel'
     */
    const VALUE_APEL = 'Apel';
    /**
     * Constant for value 'Recurs'
     * @return string 'Recurs'
     */
    const VALUE_RECURS = 'Recurs';
    /**
     * Constant for value 'Recursinanulare'
     * @return string 'Recursinanulare'
     */
    const VALUE_RECURSINANULARE = 'Recursinanulare';
    /**
     * Constant for value 'Recursininteresullegii'
     * @return string 'Recursininteresullegii'
     */
    const VALUE_RECURSININTERESULLEGII = 'Recursininteresullegii';
    /**
     * Constant for value 'Sesizareprealabila'
     * @return string 'Sesizareprealabila'
     */
    const VALUE_SESIZAREPREALABILA = 'Sesizareprealabila';
    /**
     * Constant for value 'ContestaţieNCPP'
     * @return string 'ContestaţieNCPP'
     */
    const VALUE_CONTESTA_ŢIE_NCPP = 'ContestaţieNCPP';
    /**
     * Constant for value 'Recursincasatie'
     * @return string 'Recursincasatie'
     */
    const VALUE_RECURSINCASATIE = 'Recursincasatie';
    /**
     * Constant for value 'ContestatieICCJ'
     * @return string 'ContestatieICCJ'
     */
    const VALUE_CONTESTATIE_ICCJ = 'ContestatieICCJ';
    /**
     * Constant for value 'ContestatieInAnulareNCPP'
     * @return string 'ContestatieInAnulareNCPP'
     */
    const VALUE_CONTESTATIE_IN_ANULARE_NCPP = 'ContestatieInAnulareNCPP';
    /**
     * Constant for value 'RevizuireContestatieNCPP'
     * @return string 'RevizuireContestatieNCPP'
     */
    const VALUE_REVIZUIRE_CONTESTATIE_NCPP = 'RevizuireContestatieNCPP';
    /**
     * Constant for value 'Contestatie'
     * @return string 'Contestatie'
     */
    const VALUE_CONTESTATIE = 'Contestatie';
    /**
     * Constant for value 'Revizuire'
     * @return string 'Revizuire'
     */
    const VALUE_REVIZUIRE = 'Revizuire';
    /**
     * Constant for value 'Contestatieinanulare'
     * @return string 'Contestatieinanulare'
     */
    const VALUE_CONTESTATIEINANULARE = 'Contestatieinanulare';
    /**
     * Constant for value 'Stabilireacompetentei'
     * @return string 'Stabilireacompetentei'
     */
    const VALUE_STABILIREACOMPETENTEI = 'Stabilireacompetentei';
    /**
     * Constant for value 'Recursimpotrivaincheierii'
     * @return string 'Recursimpotrivaincheierii'
     */
    const VALUE_RECURSIMPOTRIVAINCHEIERII = 'Recursimpotrivaincheierii';
    /**
     * Constant for value 'Recuzare'
     * @return string 'Recuzare'
     */
    const VALUE_RECUZARE = 'Recuzare';
    /**
     * Constant for value 'Stramutare'
     * @return string 'Stramutare'
     */
    const VALUE_STRAMUTARE = 'Stramutare';
    /**
     * Constant for value 'Indreptareeroaremateriala'
     * @return string 'Indreptareeroaremateriala'
     */
    const VALUE_INDREPTAREEROAREMATERIALA = 'Indreptareeroaremateriala';
    /**
     * Constant for value 'ContestatieinanulareFond'
     * @return string 'ContestatieinanulareFond'
     */
    const VALUE_CONTESTATIEINANULARE_FOND = 'ContestatieinanulareFond';
    /**
     * Constant for value 'ContestatieinanulareApel'
     * @return string 'ContestatieinanulareApel'
     */
    const VALUE_CONTESTATIEINANULARE_APEL = 'ContestatieinanulareApel';
    /**
     * Constant for value 'ContestatieinanulareRecurs'
     * @return string 'ContestatieinanulareRecurs'
     */
    const VALUE_CONTESTATIEINANULARE_RECURS = 'ContestatieinanulareRecurs';
    /**
     * Constant for value 'RevizuireFond'
     * @return string 'RevizuireFond'
     */
    const VALUE_REVIZUIRE_FOND = 'RevizuireFond';
    /**
     * Constant for value 'RevizuireApel'
     * @return string 'RevizuireApel'
     */
    const VALUE_REVIZUIRE_APEL = 'RevizuireApel';
    /**
     * Constant for value 'RevizuireRecurs'
     * @return string 'RevizuireRecurs'
     */
    const VALUE_REVIZUIRE_RECURS = 'RevizuireRecurs';
    /**
     * Return allowed values
     * @uses self::VALUE_FOND
     * @uses self::VALUE_APEL
     * @uses self::VALUE_RECURS
     * @uses self::VALUE_RECURSINANULARE
     * @uses self::VALUE_RECURSININTERESULLEGII
     * @uses self::VALUE_SESIZAREPREALABILA
     * @uses self::VALUE_CONTESTA_ŢIE_NCPP
     * @uses self::VALUE_RECURSINCASATIE
     * @uses self::VALUE_CONTESTATIE_ICCJ
     * @uses self::VALUE_CONTESTATIE_IN_ANULARE_NCPP
     * @uses self::VALUE_REVIZUIRE_CONTESTATIE_NCPP
     * @uses self::VALUE_CONTESTATIE
     * @uses self::VALUE_REVIZUIRE
     * @uses self::VALUE_CONTESTATIEINANULARE
     * @uses self::VALUE_STABILIREACOMPETENTEI
     * @uses self::VALUE_RECURSIMPOTRIVAINCHEIERII
     * @uses self::VALUE_RECUZARE
     * @uses self::VALUE_STRAMUTARE
     * @uses self::VALUE_INDREPTAREEROAREMATERIALA
     * @uses self::VALUE_CONTESTATIEINANULARE_FOND
     * @uses self::VALUE_CONTESTATIEINANULARE_APEL
     * @uses self::VALUE_CONTESTATIEINANULARE_RECURS
     * @uses self::VALUE_REVIZUIRE_FOND
     * @uses self::VALUE_REVIZUIRE_APEL
     * @uses self::VALUE_REVIZUIRE_RECURS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FOND,
            self::VALUE_APEL,
            self::VALUE_RECURS,
            self::VALUE_RECURSINANULARE,
            self::VALUE_RECURSININTERESULLEGII,
            self::VALUE_SESIZAREPREALABILA,
            self::VALUE_CONTESTA_ŢIE_NCPP,
            self::VALUE_RECURSINCASATIE,
            self::VALUE_CONTESTATIE_ICCJ,
            self::VALUE_CONTESTATIE_IN_ANULARE_NCPP,
            self::VALUE_REVIZUIRE_CONTESTATIE_NCPP,
            self::VALUE_CONTESTATIE,
            self::VALUE_REVIZUIRE,
            self::VALUE_CONTESTATIEINANULARE,
            self::VALUE_STABILIREACOMPETENTEI,
            self::VALUE_RECURSIMPOTRIVAINCHEIERII,
            self::VALUE_RECUZARE,
            self::VALUE_STRAMUTARE,
            self::VALUE_INDREPTAREEROAREMATERIALA,
            self::VALUE_CONTESTATIEINANULARE_FOND,
            self::VALUE_CONTESTATIEINANULARE_APEL,
            self::VALUE_CONTESTATIEINANULARE_RECURS,
            self::VALUE_REVIZUIRE_FOND,
            self::VALUE_REVIZUIRE_APEL,
            self::VALUE_REVIZUIRE_RECURS,
        );
    }
}
