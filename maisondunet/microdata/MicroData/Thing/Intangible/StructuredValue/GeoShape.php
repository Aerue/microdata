<?php
namespace MicroData\Thing\Intangible\StructuredValue;

use MicroData\Thing\Intangible\StructuredValue;

/**
 * The geographic shape of a place. A GeoShape can be described using several properties whose values are based on latitude / longitude pairs. Either whitespace or commas can be used to separate latitude and longitude ; whitespace should be used when writing a list of several such points.
 */
class GeoShape extends StructuredValue {
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
     * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the second point is the upper corner. A box is expressed as two points separated by a space character.
     *
     * @var Text
     */
    protected $box = null;

    /**
     * 	A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
     *
     * @var Text
     */
    protected $circle = null;

    /**
     * The elevation of a location (WGS 84).
     *
     * @var Number | Text
     */
    protected $elevation = null;

    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
     *
     * @var Text
     */
    protected $line = null;

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
     *
     * @var Text
     */
    protected $polygon = null;

    /**
     * The postal code. For example, 94043.
     *
     * @var Text
     */
    protected $postalCode = null;
}