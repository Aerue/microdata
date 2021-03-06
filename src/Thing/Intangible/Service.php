<?php
namespace Maisondunet\Microdata\Thing\Intangible;

use Maisondunet\Microdata\Thing\Intangible;

/**
 * 
 */
class Service extends Intangible {
    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating
     */
    protected $aggregateRating = null;
    
    /**
     * The geographic area where a service or offered item is provided. Supersedes serviceArea.
     *
     * @var AdministrativeArea | GeoShape | Place | Text
     * @see serviceArea
     */
    protected $areaServed = null;
    
    /**
     * An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.
     *
     * @var Audience
     * @see serviceAudience
     */
    protected $audience = null;
    
    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
     *
     * @var ServiceChannel
     */
    protected $availableChannel = null;
    
    /**
     * An award won by or for this item. Supersedes awards.
     *
     * @var Text
     * @see awards
     */
    protected $award = null;
    
    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     * @var Brand | Organization 
     */
    protected $brand = null;
    
    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @var Text | Thing 
     */
    protected $category = null;
    
    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     * @var OfferCatalog
     */
    protected $hasOfferCatalog = null;
    
    /**
     * The hours during which this service or contact is available.
     *
     * @var OpeningHoursSpecification
     */
    protected $hoursAvailable = null;
    
    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @var Product | Service 
     */
    protected $isRelatedTo = null;
    
    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @var Product | Service 
     */
    protected $isSimilarTo = null;
    
    /**
     * An associated logo.
     *
     * @var ImageObject | URL 
     */
    protected $logo = null;
    
    /**
     * An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     *
     * @var Offer
     */
    protected $offers = null;
    
    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
     *
     * @var Organization | Person
     * @see carrier
     */
    protected $provider = null;
    
    /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     *
     * @var Text
     */
    protected $providerMobility = null;
    
    /**
     * 	A review of the item. Supersedes reviews.
     *
     * @var Review
     * @see reviews
     */
    protected $review = null;
    
    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc. Supersedes produces.
     *
     * @var Thing
     * @see produces
     */
    protected $serviceOutput = null;
    
    /**
     * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
     *
     * @var Text
     */
    protected $serviceType = null;
}