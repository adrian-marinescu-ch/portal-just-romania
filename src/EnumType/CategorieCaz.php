<?php

namespace PortalJustRomania\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CategorieCaz EnumType
 * @subpackage Enumerations
 */
class CategorieCaz extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Penal'
     * @return string 'Penal'
     */
    const VALUE_PENAL = 'Penal';
    /**
     * Constant for value 'Civil'
     * @return string 'Civil'
     */
    const VALUE_CIVIL = 'Civil';
    /**
     * Constant for value 'Litigiicuprofesionistii'
     * @return string 'Litigiicuprofesionistii'
     */
    const VALUE_LITIGIICUPROFESIONISTII = 'Litigiicuprofesionistii';
    /**
     * Constant for value 'Contenciosadministrativsifiscal'
     * @return string 'Contenciosadministrativsifiscal'
     */
    const VALUE_CONTENCIOSADMINISTRATIVSIFISCAL = 'Contenciosadministrativsifiscal';
    /**
     * Constant for value 'Minorisifamilie'
     * @return string 'Minorisifamilie'
     */
    const VALUE_MINORISIFAMILIE = 'Minorisifamilie';
    /**
     * Constant for value 'Litigiidemunca'
     * @return string 'Litigiidemunca'
     */
    const VALUE_LITIGIIDEMUNCA = 'Litigiidemunca';
    /**
     * Constant for value 'Altematerii'
     * @return string 'Altematerii'
     */
    const VALUE_ALTEMATERII = 'Altematerii';
    /**
     * Constant for value 'Asigurarisociale'
     * @return string 'Asigurarisociale'
     */
    const VALUE_ASIGURARISOCIALE = 'Asigurarisociale';
    /**
     * Constant for value 'Faliment'
     * @return string 'Faliment'
     */
    const VALUE_FALIMENT = 'Faliment';
    /**
     * Constant for value 'ProprietateIntelectuala'
     * @return string 'ProprietateIntelectuala'
     */
    const VALUE_PROPRIETATE_INTELECTUALA = 'ProprietateIntelectuala';
    /**
     * Constant for value 'Dreptmaritimsifluvial'
     * @return string 'Dreptmaritimsifluvial'
     */
    const VALUE_DREPTMARITIMSIFLUVIAL = 'Dreptmaritimsifluvial';
    /**
     * Constant for value 'Insolventapersoaneifizice'
     * @return string 'Insolventapersoaneifizice'
     */
    const VALUE_INSOLVENTAPERSOANEIFIZICE = 'Insolventapersoaneifizice';
    /**
     * Return allowed values
     * @uses self::VALUE_PENAL
     * @uses self::VALUE_CIVIL
     * @uses self::VALUE_LITIGIICUPROFESIONISTII
     * @uses self::VALUE_CONTENCIOSADMINISTRATIVSIFISCAL
     * @uses self::VALUE_MINORISIFAMILIE
     * @uses self::VALUE_LITIGIIDEMUNCA
     * @uses self::VALUE_ALTEMATERII
     * @uses self::VALUE_ASIGURARISOCIALE
     * @uses self::VALUE_FALIMENT
     * @uses self::VALUE_PROPRIETATE_INTELECTUALA
     * @uses self::VALUE_DREPTMARITIMSIFLUVIAL
     * @uses self::VALUE_INSOLVENTAPERSOANEIFIZICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PENAL,
            self::VALUE_CIVIL,
            self::VALUE_LITIGIICUPROFESIONISTII,
            self::VALUE_CONTENCIOSADMINISTRATIVSIFISCAL,
            self::VALUE_MINORISIFAMILIE,
            self::VALUE_LITIGIIDEMUNCA,
            self::VALUE_ALTEMATERII,
            self::VALUE_ASIGURARISOCIALE,
            self::VALUE_FALIMENT,
            self::VALUE_PROPRIETATE_INTELECTUALA,
            self::VALUE_DREPTMARITIMSIFLUVIAL,
            self::VALUE_INSOLVENTAPERSOANEIFIZICE,
        );
    }
}
