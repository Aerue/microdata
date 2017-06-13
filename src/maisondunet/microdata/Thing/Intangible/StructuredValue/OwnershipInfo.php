<?php
namespace Maisondunet\Microdata\Thing\Intangible\StructuredValue;

use Maisondunet\Microdata\Thing\Intangible\StructuredValue;

/**
 * A structured value providing information about when a certain organization or person owned a certain product.
 */
class OwnershipInfo extends StructuredValue {
    /**
     * The organization or person from which the product was acquired.
     *
     * @var Person | Organization
     */
    protected $acquiredFrom = null;
    
    /**
     * The date and time of obtaining the product.
     *
     * @var DateTime
     */
    protected $ownedFrom = null;
    
    /**
     * The date and time of giving up ownership on the product.
     *
     * @var DateTime
     */
    protected $ownedThrough = null;
    
    /**
     * The product that this structured value is referring to.
     *
     * @var Product
     */
    protected $typeOfGood = null;
}