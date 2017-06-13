<?php
namespace Maisondunet\Microdata\Thing\Intangible\StructuredValue;

use Maisondunet\Microdata\Thing\Intangible\StructuredValue;

/**
 * A structured value providing information about the opening hours of a place or a certain service inside a place.
 */
class OpeningHoursSpecification extends StructuredValue {
    /**
     * The closing hour of the place or service on the given day(s) of the week.
     *
     * @var Time
     */
    protected $closes = null;
    
    /**
     * The day of the week for which these opening hours are valid.
     *
     * @var DayOfWeek
     */
    protected $dayOfWeek = null;
    
    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     * @var Time
     */
    protected $opens = null;
    
    /**
     * The date when the item becomes valid.
     *
     * @var DateTime
     */
    protected $validFrom = null;
    
    /**
     * The end of the validity of offer, price specification, or opening hours data.
     *
     * @var DateTime
     */
    protected $validThrough = null;
}