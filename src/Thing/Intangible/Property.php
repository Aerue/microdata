<?php
namespace Maisondunet\Microdata\Thing\Intangible;

use Maisondunet\Microdata\Thing\Intangible;

/**
 * A property, used to indicate attributes and relationships of some Thing. Equivalent to rdf:Property.
 */
class Property extends Intangible {
    /**
     * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
     *
     * @var Class
     */
    protected $domainIncludes = null;
    
    /**
     * Relates a property to a property that is its inverse.
     * Inverse properties relate the same pairs of items to each other, but in reversed direction.
     * For example, the " alumni " and " alumniOf " properties are inverseOf each other.
     * Some properties don't have explicit inverses.
     * In these situations RDFa and JSON-LD syntax for reverse properties can be used.
     *
     * @var Property
     */
    protected $inverseOf = null;
    
    /**
     * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
     *
     * @var Class
     */
    protected $rangeIncludes = null;
    
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
     *
     * @var Enumeration | Class | Property 
     */
    protected $supersededBy = null;
}