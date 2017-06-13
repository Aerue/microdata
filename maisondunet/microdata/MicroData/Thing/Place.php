<?php
namespace MicroData\Thing;

use MicroData\Thing;

/**
 * Entities that have a somewhat fixed, physical extension.
 */
class Place extends Thing {
    /**
     * 	A property - value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.
     *
     * Note :
     *
     * Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property / value mechanism.
     *
     * @var PropertyValue
     */
    protected $additionalProperty = null;

    /**
     * Physical address of the item.
     *
     * @var Text | PostalAddress
     */
    protected $address = null;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating
     */
    protected $aggregateRating = null;

    /**
     * A short textual code (also called " store code ") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.
     *
     * For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code " 3047 " is a branchCode for a particular branch.
     *
     * @var Text
     */
    protected $branchCode = null;

    /**
     * The basic containment relation between a place and one that contains it. Supersedes containedIn.
     * Inverse property : containsPlace.
     *
     * @var Place
     * @see containedIn
     * @see containsPlace
     */
    protected $containedInPlace = null;

    /**
     * The basic containment relation between a place and another that it contains.
     * Inverse property : containsPlace.
     *
     * @var Place
     * @see containsPlace
     */
    protected $containsPlace = null;

    /**
     * Upcoming or past event associated with this place, organization or action. Supersedes events.
     *
     * @var Event
     * @see events
     */
    protected $event = null;

    /**
     * The fax number.
     *
     * @var Text
     */
    protected $faxNumber = null;

    /**
     * The geo coordinates of the place.
     *
     * @var GeoCoordinates | GeoShape
     */
    protected $geo = null;

    /**
     * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @var Text
     */
    protected $globalLocationNumber = null;

    /**
     * A URL to a map of the place. Supersedes maps, map.
     *
     * @var URL | Map
     * @see maps
     * @see map
     */
    protected $hasMap = null;

    /**
     * 	The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     *
     * @var Text
     */
    protected $isicV4 = null;

    /**
     * An associated logo.
     *
     * @var URL | ImageObject
     */
    protected $logo = null;

    /**
     * The opening hours of a certain place.
     *
     * @var OpeningHoursSpecification
     */
    protected $openingHoursSpecification = null;

    /**
     * A photograph of this place. Supersedes photos.
     *
     * @var Photograph | ImageObject
     * @see photos
     */
    protected $photo = null;

    /**
     * A review of the item. Supersedes reviews.
     *
     * @var Review
     * @see reviews
     */
    protected $review = null;

    /**
     * 	The telephone number.
     *
     * @var Text
     */
    protected $telephone = null;
}