<?php
namespace MicroData;

use Application\Object;

/**
 * Classe générique de l'ensemble des données structurées.
 *
 * @abstract
 * @version 1.0
 * @since 1.0
 */
abstract class MicroData extends Object
{
    /**
     * Retourne ou modifie une propriété.
     * 
     * @param string $name Nom de la propriété
     * @param mixed $value Valeur à donner à la propriété
     * @return string Propriété recherchée ou modifiée
     * @access public
     * @version 1.0
     * @since 1.0
     */
    public function &prop($name, $value = null)
    {
        if(!is_null($value)) {
            if(is_string($value)) {
                $value = self::classExists($value) ? new $value() : new DataType\Text($value);
            }

            if(is_int($value)) {
                $value = new DataType\Number\NumberInteger($value);
            }

            if(is_float($value)) {
                $value = new DataType\Number\NumberFloat($value);
            }

            if(is_bool($value)) {
                $value = $value ? new DataType\Type\Boolean\BooleanTrue($value) : new MicroData\DataType\Boolean\BooleanFalse($value);
            }

            $this->$name = $value;
        }

        return $this->$name;
    }

    /**
     * Détermine si une classe de type " MicroData " existe.
     * 
     * @param string $name Nom de la classe à tester
     * @return boolean La classe testée existe (true) ou pas (false)
     * @access protected
     * @static
     * @version 1.0
     * @since 1.0
     */
    protected static function classExists($name)
    {
        return class_exists($name, strstr($name, 'MicroData\\'));
    }
}