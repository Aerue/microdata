<?php
namespace MicroData\Thing\Intangible\StructuredValue;

use MicroData\Thing\Intangible\StructuredValue;

/**
 * The geographic coordinates of a place or event.
 */
class GeoCoordinates extends StructuredValue {
    /**
     * Physical address of the item.
     *
     * @var Text | PostalAddress
     */
    protected $address = null;

    /**
     * The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var Text | Country
     */
    protected $addressCountry = null;

    /**
     * The elevation of a location (WGS 84).
     *
     * @var Number | Text
     */
    protected $elevation = null;

    /**
     * The latitude of a location. For example 37.42242 (WGS 84).
     *
     * @var Number | Text
     */
    protected $latitude = null;

    /**
     * The longitude of a location. For example -122.08585 (WGS 84).
     *
     * @var Number | Text
     */
    protected $longitude = null;

    /**
     * The postal code. For example, 94043.
     *
     * @var Text
     */
    protected $postalCode = null;
}