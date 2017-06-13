<?php
namespace MicroData\Thing\Intangible\StructuredValue;

use MicroData\Thing\Intangible\StructuredValue;

/**
 * A property-value pair, e.g. representing a feature of a product or place.
 * 
 * Use the " name " property for the name of the property.
 * 
 * If there is an additional human-readable version of the value, put that into the " description " property.
 *
 * Always use specific schema.org properties when a) they exist and b) you can populate them. Using PropertyValue as a substitute will typically not trigger the same effect as using the original, specific property. 
 */
class PropertyValue extends StructuredValue {
    /**
     * The upper value of some characteristic or property.
     *
     * @var Number
     */
    protected $maxValue = null;
    
    /**
     * The lower value of some characteristic or property.
     *
     * @var Number
     */
    protected $minValue = null;
    
    /**
     * A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property.
     * 
     * propertyID can be :
     * 
     * 1. a prefixed string, mainly meant to be used with standards for product properties
     * 2. a site-specific, non-prefixed string (e.g. the primary key of the property or the vendor-specific id of the property)
     * 3. a URL indicating the type of the property, either pointing to an external vocabulary or a Web resource that describes the property (e.g. a glossary entry).
     * 
     * Standards bodies should promote a standard prefix for the identifiers of properties from their standards.
     *
     * @var Text | URL
     */
    protected $propertyID  = null;
    
    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
     *
     * @var Text | URL 
     */
    protected $unitCode = null;
    
    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for unitCode.
     *
     * @var Text
     */
    protected $unitText = null;
    
    /**
     * The value of the quantitative value or property value node.
     * 
     * For QuantitativeValue, the recommended type for values is " Number ".
     * 
     * For PropertyValue, it can be " Text ", " Number ", " Boolean " or " StructuredValue ".
     *
     * @var Text | Boolean | Number | StructuredValue 
     */
    protected $value = null;
    
    /**
     * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
     *
     * @var PropertyValue | QuantitativeValue | Enumeration | StructuredValue | QualitativeValue 
     */
    protected $valueReference = null;
}