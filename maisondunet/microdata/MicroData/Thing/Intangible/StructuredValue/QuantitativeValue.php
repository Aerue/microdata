<?php
namespace MicroData\Thing\Intangible\StructuredValue;

use MicroData\Thing\Intangible\StructuredValue;

/**
 * A point value or interval for product characteristics and other purposes.
 */
class QuantitativeValue extends StructuredValue {
    /**
     * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.
     *
     * @var PropertyValue
     */
    protected $additionalProperty = null;
    
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