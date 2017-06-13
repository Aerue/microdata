<?php
namespace Maisondunet\Microdata\Thing;

use Maisondunet\Microdata\Thing;

/**
 * A person (alive, dead, undead or fictional).
 */
class Person extends Thing {
    /**
     * An additional name for a Person, can be used for a middle name.
     *
     * @var Text
     */
    protected $additionalName = null;
    
    /**
     * Physical address of the item.
     *
     * @var Text | PostalAddress 
     */
    protected $address = null;
    
    /**
     * An organization that this person is affiliated with.
     * 
     * For example, a school / university, a club or a team.
     *
     * @var Organization 
     */
    protected $affiliation = null;
    
    /**
     * An organization that the person is an alumni of.
     * Inverse property: alumni.
     *
     * @var Organization | EducationalOrganization 
     * @see alumni
     */
    protected $alumniOf = null;
    
    /**
     * An award won by or for this item. Supersedes awards.
     *
     * @var Text
     * @see awards
     */
    protected $award = null;
    
    /**
     * Date of birth.
     *
     * @var Date
     */
    protected $birthDate = null;
    
    /**
     * The place where the person was born.
     *
     * @var Place 
     */
    protected $birthPlace = null;
    
    /**
     * 
     * The brand(s) associated with a product or service or the brand(s) maintained by an organization or business person.
     *
     * @var Brand | Organization 
     */
    protected $brand = null;
    
    /**
     * A child of the person.
     * 
     * @var Person 
     */
    protected $children = null;
    
    /**
     * A colleague of the person. Supersedes colleagues.
     *
     * @var Person
     * @see colleagues
     */
    protected $colleague = null;
    
    /**
     * A contact point for a person or organization. Supersedes contactPoints.
     *
     * @var ContactPoint 
     * @see contactPoints
     */
    protected $contactPoint = null;
    
    /**
     * Date of death.
     *
     * @var Date
     */
    protected $deathDate = null;
    
    /**
     * The place where the person died.
     *
     * @var Place
     */
    protected $deathPlace = null;
    
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
     * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the name property.
     *
     * @var Text 
     */
    protected $familyName = null;
    
    /**
     * The fax number.
     *
     * @var Text 
     */
    protected $faxNumber = null;
    
    /**
     * The most generic uni-directional social relation.
     *
     * @var Person 
     */
    protected $follows = null;
    
    /**
     * Gender of the person.
     *
     * @var Text
     */
    protected $gender = null;
    
    /**
     * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the name property.
     *
     * @var Text
     */
    protected $givenName = null;
    
    /**
     * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @var Text
     */
    protected $globalLocationNumber = null;
    
    /**
     * Indicates an OfferCatalog listing for this Organization Person, or Service.
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
     * The height of the item.
     *
     * @var QuantitativeValue | Distance 
     */
    protected $height = null;
    
    /**
     * A contact location for a person's residence.
     *
     * @var Place | ContactPoint 
     */
    protected $homeLocation = null;
    
    /**
     * An honorific prefix preceding a Person's name such as Dr / Mrs / Mr.
     *
     * @var Text
     */
    protected $honorificPrefix = null;
    
    /**
     * An honorific suffix preceding a Person's name such as M.D. / PhD / MSCSW.
     *
     * @var Text
     */
    protected $honorificSuffix = null;
    
    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person or place.
     *
     * @var Text
     */
    protected $isicV4 = null;
    
    /**
     * The job title of the person (for example, Financial Manager).
     *
     * @var Text
     */
    protected $jobTitle = null;
    
    /**
     * The most generic bi-directional social / work relation.
     *
     * @var Person 
     */
    protected $knows = null;
    
    /**
     * A pointer to products or services offered by the organization or person.
     * Inverse property : offeredBy.
     *
     * @var Offer 
     * @see offeredBy
     */
    protected $makesOffer = null;
    
    /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     * Inverse property : member.
     *
     * @var ProgramMembership | Organization 
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
     * Nationality of the person.
     *
     * @var Country 
     */
    protected $nationality = null;
    
    /**
     * The total financial value of the person as calculated by subtracting assets from liabilities.
     *
     * @var PriceSpecification 
     */
    protected $netWorth = null;
    
    /**
     * Products owned by the organization or person.
     *
     * @var OwnershipInfo | Product 
     */
    protected $owns = null;
    
    /**
     * A parent of this person. Supersedes parents.
     *
     * @var Person 
     * @see parents
     */
    protected $parent = null;
    
    /**
     * Event that this person is a performer or participant in.
     *
     * @var Event 
     */
    protected $performerIn = null;
    
    /**
     * The most generic familial relation.
     *
     * @var Person 
     */
    protected $relatedTo = null;
    
    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     * @var Demand 
     */
    protected $seeks = null;
    
    /**
     * A sibling of the person. Supersedes siblings.
     *
     * @var Person 
     * @see siblings
     */
    protected $sibling = null;
    
    /**
     * The person's spouse.
     *
     * @var Person
     */
    protected $spouse = null;
    
    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF / NIF in Spain.
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
     * The weight of the product or person.
     *
     * @var QuantitativeValue 
     */
    protected $weight = null;
    
    /**
     * A contact location for a person's place of work.
     *
     * @var Place | ContactPoint 
     */
    protected $workLocation = null;
    
    /**
     * Organizations that the person works for.
     *
     * @var Organization
     */
    protected $worksFor = null;
}