<?php
namespace MicroData\Thing\Intangible\StructuredValue\ContactPoint;

use MicroData\Thing\Intangible\StructuredValue\ContactPoint;

/**
 * The mailing address.
 */
class PostalAddress extends ContactPoint {
    /**
     * The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var Text | Country 
     */
    protected $addressCountry = null;
    
    /**
     * The locality. For example, Mountain View.
     *
     * @var Text
     */
    protected $addressLocality = null;
    
    /**
     * The region. For example, CA.
     *
     * @var Text
     */
    protected $addressRegion = null;
    
    /**
     * The post office box number for PO box addresses.
     *
     * @var Text
     */
    protected $postOfficeBoxNumber = null;
    
    /**
     * The postal code. For example, 94043.
     *
     * @var Text
     */
    protected $postalCode = null;
    
    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     *
     * @var Text
     */
    protected $streetAddress = null;
}