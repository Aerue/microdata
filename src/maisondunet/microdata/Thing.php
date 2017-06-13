<?php
namespace Maisondunet\Microdata;

/**
 * The most generic type of item.
 */
class Thing extends MicroData {
    /**
     * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax.
     * This is a relationship between something and a class that the thing is in.
     * In RDFa syntax, it is better to use the native RDFa syntax - the " typeof " attribute - for multiple types.
     * Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
     *
     * @var Url
     */
    protected $additionalType = null;
    
    /**
     * An alias for the item.
     *
     * @var Text
     */
    protected $alternateName = null;
    
    /**
     * A short description of the item.
     *
     * @var Text
     */
    protected $description = null;
    
    /**
     * An image of the item.
     *
     * @var ImageObject | Url
     */
    protected $image = null;
    
    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described.
     *
     * @var CreativeWork | Url
     */
    protected $mainEntityOfPage = null;
    
    /**
     * The name of the item.
     *
     * @var Text
     */
    protected  $name = null;
    
    /**
     * Indicates a potential Action, which describes an idealized action in which this thing would play an " object " role.
     *
     * @var Action
     */
    protected $potentialAction = null;
    
    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Freebase page or official website.
     *
     * @var Url
     */
    protected $sameAs = null;
    
    /**
     * URL of the item.
     *
     * @var Url
     */
    protected $url = null;
    
    /**
     * Effectue la liaison entre 2 propriétés.
     * 
     * @param string $name Nom de la propriété de remplacement
     * @param string $superded Nom de la propriété remplacée
     * @param string $type Type de la propriété de remplacement
     */
    public function supersedes($name, $superded = null, $type = null) {
        static $properties = null;
        
        if(!is_array($properties)) {
            $properties = array();
        }
        
        if(empty($properties[$name])) {
            if(is_null($type)) {
                return null;
            }
            
            $type = 'MicroData\\Thing\\Intangible\\' . $type;
            $properties[$name] = new $type();
            $properties[$name]->prop('name', $superded);
            $supersededBy =& $properties[$name]->prop('supersededBy', new Thing\Intangible\Property());
            $supersededBy->prop('name', $name);
        }
        
        return $properties[$name];
    }
    
    /**
     * Ajoute une propriété à une liste
     */
    public function &add($name, $value) {
        $prop =& $this->prop($name);
        
        if(!is_array($prop)) {
            $prop = array();
        }
            
        $prop[] = self::classExists($value) ? new $value() : $value;
        
        return $prop[count($prop) - 1];
    }
    /*public function &add($name, $value) {
        static $data = null;
        
        if(!is_array($data)) {
            $data = array();
        }
            
        $superded = $this->supersedes($name);
        if(is_null($superded)) {
            return null;
        }
        
        $superdedName = strval($superded->prop('name'));
        if(!isset($data[$superdedName])) {
            $item =& $this->prop($superdedName, $value);
            $data[$superdedName][] = $item;
        }
        
        return $data[$superdedName][count($data[$superdedName]) - 1];
    }*/
    
    /**
     * Transpose les données structurées au format HTML /Json
     * 
     * @param boolean $options Active les options JSON (true) ou pas (false).
     * @return string Code HTML à insérer dans un document
     */
    public function html($options = true) {
        $document = new \DOMDocument('');
        $element = $document->createElement('script');
        $element->setAttribute('type', 'application/ld+json');
        $element->appendChild(new \DOMText("\n" . \Json\Json::encode(array_merge(
            array(
                '@context' => 'http://schema.org'
            ),
            $this->_jsonLd()
        ), $options) . "\n"));
        return $document->saveHTML($element);
    }
    
    /**
     * Transpose l'ensemble des données structurées au format Json / Ld
     * 
     * @return string Code HTML à insérer dans un document
     */
    public function jsonLd() {
        return array_merge(
            array(
                '@context' => 'http://schema.org'
            ),
            $this->_jsonLd()
        );
    }
    
    /**
     * Transpose les données structurées d'un objet au format Json / Ld
     */
    private function _jsonLd() {
        $class = explode('\\', $this->getClass());
        
        $code = array('@type' => $class[count($class) - 1]);
        $properties = array_keys($this->getProperties());
        foreach($properties as $name) {
            $prop = $this->prop($name);
            if(!is_null($prop)) {
                if(is_array($prop)) {
                    $list = array();
                    foreach($prop as $item) {
                        $list[] = $item->_jsonLd();
                    }
                    
                    $code[$name] = $list;
                }
                else {
                    $code[$name] = $prop->is('MicroData\DataType') ? strval($prop) : $prop->_jsonLd();
                }
            }
        }
        
        return $code;
    }
}