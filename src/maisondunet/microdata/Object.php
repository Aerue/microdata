<?php
namespace Maisondunet\Microdata;

/**
* Classe principale dont toute autre classe doit être dérivée.
*
* @package Framework
* @subpackage Base
* @abstract
* @version 1.0
* @since 1.0
*/
abstract class Object {
    /**
    * Constructeur.
    *
    * @access public
    * @version 1.0
    * @since 1.0
    */
    public function __construct() {}

    /**
    * Renvoit la valeur courante d'une propriété de l'objet ou celle par défaut.
    *
    * @param string $property Nom de la propriété
    * @param mixed $default Valeur par défaut
    * @return mixed Valeur de la propriété
    * @access public
    * @version 1.0
    * @since 1.0
    */
    public function get($property, $default = null) {
        if(isset($this->$property)) {
            return (empty($this->$property) && !is_null($default) ? $default : $this->$property);
        }
        
        return $default;
    }

    /**
    * Renvoit la référence d'une propriété de l'objet ou celle par défaut.
    *
    * @param string $property Nom de la propriété
    * @param mixed $default Valeur par défaut
    * @return mixed Référence de la propriété
    * @access public
    * @version 1.0
    * @since 1.0
    */
    public function &getRef($property, $default = null) {
        if(isset($this->$property)) {
            return $this->$property;
        }
        
        return $default;
    }

    /**
    * Renvoit la valeur courante d'une propriété de l'objet si c'est une chaîne de caractères ou celle par défaut.
    *
    * @param string $property Nom de la propriété
    * @param mixed $default Valeur par défaut
    * @return mixed Valeur de la propriété
    * @access public
    * @version 1.0
    * @since 1.0
    */
    public function getString($property, $default = null) {
        if(isset($this->$property)) {
            if(is_string ($this->$property)) {
                $args = func_get_args();
                if(count($args) > 2) {
                    return vsprintf($this->$property, array_slice($args, 2));
                }

                return (empty($this->$property) && !is_null($default) ? $default : $this->$property);
            }
        }

        return $default;
    }

    /**
    * Modifie une propriété de l'objet. La crée si elle n'existe pas.
    *
    * @param string $property Nom de la propriété
    * @param mixed $value Valeur à lui fournir
    * @return mixed Ancienne valeur de la propriété
    * @access public
    * @version 1.0
    * @since 1.0
    */
    public function set($property, $value = null) {
        $previous = isset($this->$property) ? $this->$property : null;
        $this->$property = $value;
        return $previous;
    }

    /**
    * Indique si l'objet possède la propriété nommée.
    *
    * @param string $property Nom de la propriété
    * @return boolean L'objet possède la propriété (true) ou non (false)
    * @access public
    * @version 1.0
    * @since 1.0
    */
    public function has($property) {
        return isset($this->$property);
    }

    /**
    * Vérifie l'égalité d'une proriété de l'objet à une valeur donnée
    *
    * @param string $property Nom à vérifier
    * @param mixed $value Valeur à comparer
    * @return boolean La propriété a la valeur indiquée (true) ou non (false)
    * @access public
    * @version 1.0
    * @since 1.0
    */
    public function propertyIs($property, $value) {
        $previous = isset($this->$property) ? $this->$property : null;
        return $previous == $value;
    }

    /**
    * Recherche la présence d'un mot-clé dans un attribut de type chaîne
    *
    * @param string $field Nom du champs où rechercher le mot-clé
    * @param string $keyword Mot-clé recherché
    * @return boolean L'attribut contient le mot-clé (true) ou pas (false)
    * @access public
    * @version 1.0
    * @since 1.0
    */
    public function search($field, $keyword) {
        if(!is_string ($this->$field)) {
            throw new \Exception('Object::search(' . $field . ', ' . $keyword . ') : le champs \'' . $field . '\' n\'est pas une chaîne de caractères.');
        }

        return (bool)stristr(preg_replace('/\s+/', '%', trim($this->$field)), preg_replace('/\s+/', '%', trim($keyword)));
    }

    /**
    * Renvoit les propriétés de l'objet.
    *
    * @param boolean $all Renvoit les seules propriétés de la classe (false) ou en plus celles héritées des classes parentes (true)
    * @return array Propriétés de l'objet
    * @access public
    * @version 1.0
    * @since 1.0
    */
    public function getProperties($all = true) {
        $allProperties = get_class_vars(get_class($this));
        if($all) {
            return $allProperties;
        }

        return array_diff_key($allProperties, get_class_vars(get_parent_class($this)));
    }

    /**
    * Renvoit les propriétés d'un objet dont la classe est ext�rieure au framework.
    *
    * @param object $object Objet à tester
    * @param boolean $all Renvoit les seules propriétés de la classe (false) ou en plus celles héritées des classes parentes (true)
    * @return array Propriétés de l'objet
    * @access public
    * @static
    * @version 1.0
    * @since 1.0
    */
    public static function getPropertiesStatic($object, $all = true) {
        if(!is_object(self)) {
            throw new \Exception('Object::getPropertiesStatic() : $object n\'est pas un objet : ' . self::class);
        }

        $allProperties = get_class_vars(get_class($object));
        if($all) {
            return $allProperties;
        }

        return array_diff_key($allProperties, get_class_vars(get_parent_class($object)));
    }

    /**
    * Retourne la classe de l'objet.
    *
    * @return string Classe de l'instance
    * @access public
    * @version 1.0
    * @since 1.0
    */
    public function getClass() {
        return get_class($this);
    }

    /**
    * Vérifie la classe d'un objet
    *
    * @param string $class Nom de la classe à vérifier
    * @return boolean L'instance de l'objet appartient à la classe demandée (true) ou pas (false)
    * @access public
    * @version 1.0
    * @since 1.0
    */
    public function is($class) {
        return is_a($this, $class);
        //return (get_class($this) == $class);
    }
}