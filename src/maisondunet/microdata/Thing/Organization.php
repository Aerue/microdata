<?php
namespace Maisondunet\Microdata\Thing;

use Maisondunet\Microdata\Thing;

/**
 * 
 */
class Organization extends Thing {
    /**
     * Physical address of the item.
     *
     * @var PostalAddress | Text
     */
    protected $address = null;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating
     */
    protected $aggregateRating = null;

    /**
     * Alumni of an organization.
     *
     * @var Person
     */
    protected $alumni = null;

    /**
     * The geographic area where a service or offered item is provided. Supersedes serviceArea.
     *
     * @var GeoShape | AdministrativeArea | Place | Text
     * @see serviceArea
     */
    protected $areaServed = null;

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
     * A contact point for a person or organization. Supersedes contactPoints.
     *
     * @var ContactPoint
     * @see contactPoints
     */
    protected $contactPoint = null;

    /**
     * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours).
     * 
     * For example : a store with a pharmacy, or a bakery with a cafe.
     *
     * @var Organization
     */
    protected $department = null;

    /**
     * The date that this organization was dissolved.
     *
     * @var Date
     */
    protected $dissolutionDate = null;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     *
     * @var Text
     */
    protected $duns = null;

    /**
     * E-mail address.
     *
     * @var Text
     */
    protected $email = null;

    /**
     * Someone working for this organization. Supersedes employees.
     *
     * @var Person
     * @see employees
     */
    protected $employee = null;

    /**
     * Upcoming or past event associated with this place, organization, or action. Supersedes events.
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
     * A person who founded this organization. Supersedes founders.
     *
     * @var Person
     * @see founders
     */
    protected $founder = null;

    /**
     * The date that this organization was founded.
     *
     * @var Date
     */
    protected $foundingDate = null;

    /**
     * The place where the Organization was founded.
     *
     * @var Place
     */
    protected $foundingLocation = null;

    /**
     * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @var Text
     */
    protected $globalLocationNumber = null;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     * @var OfferCatalog
     */
    protected $hasOfferCatalog = null;

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @var Place
     */
    protected $hasPOS = null;

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     *
     * @var Text
     */
    protected $isicV4 = null;

    /**
     * The official name of the organization, e.g. the registered company name.
     *
     * @var Text
     */
    protected $legalName = null;

    /**
     * The location of for example where the event is happening, an organization is located, or where an action takes place.
     *
     * @var PostalAddress | Place | Text
     */
    protected $location = null;

    /**
     * An associated logo.
     *
     * @var ImageObject | URL
     */
    protected $logo = null;

    /**
     * A pointer to products or services offered by the organization or person.
     * Inverse property : offeredBy.
     *
     * @var Offer
     * @see offeredBy
     */
    protected $makesOffer = null;

    /**
     * A member of an Organization or a ProgramMembership.
     * Organizations can be members of organizations ; ProgramMembership is typically for individuals. Supersedes members, musicGroupMember.
     * Inverse property : memberOf.
     *
     * @var Organization | Person
     * @see members
     * @see musicGroupMember
     * @see memberOf
     */
    protected $member = null;

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     * Inverse property : member.
     *
     * @var Organization | ProgramMembership
     * @see member
     */
    protected $memberOf = null;

    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     *
     * @var Text
     */
    protected $naics = null;

    /**
     * The number of employees in an organization e.g. business.
     *
     * @var QuantitativeValue
     */
    protected $numberOfEmployees = null;

    /**
     * Products owned by the organization or person.
     *
     * @var OwnershipInfo | Product
     */
    protected $owns = null;

    /**
     * The larger organization that this organization is a branch of, if any. Supersedes branchOf.
     * Inverse property : subOrganization.
     *
     * @var Organization
     * @see branchOf
     * @see subOrganization
     */
    protected $parentOrganization = null;

    /**
     * A review of the item. Supersedes reviews.
     *
     * @var Review
     * @see reviews
     */
    protected $review = null;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     * @var Demand
     */
    protected $seeks = null;

    /**
     * A relationship between two organizations where the first includes the second, e.g., as a subsidiary.
     * See also : the more specific " department " property.
     * Inverse property : parentOrganization.
     *
     * @var Organization
     * @see parentOrganization
     */
    protected $subOrganization = null;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     *
     * @var Text
     */
    protected $taxID = null;

    /**
     * The telephone number.
     *
     * @var Text
     */
    protected $telephone = null;

    /**
     * The Value-added Tax ID of the organization or person.
     *
     * @var Text
     */
    protected $vatID = null;
    
    /**
     * 
     */
    /*public function __construct() {
        $this->supersedes('employee', 'employees', 'Enumeration');
    }*/
}