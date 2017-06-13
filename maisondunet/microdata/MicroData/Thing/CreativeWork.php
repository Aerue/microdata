<?php
namespace MicroData\Thing;

use MicroData\Thing;

/**
 * The most generic kind of creative work, including books, movies, photographs, software programs, etc.
 */
class CreativeWork extends Thing {
    /**
     * The subject matter of the content.
     *
     * @var Thing
     */
    protected $about = null;
    
    /**
     * Indicates that the resource is compatible with the referenced accessibility API.
     *
     * @var Text
     */
    protected $accessibilityAPI = null;
    
    /**
     * Identifies input methods that are sufficient to fully control the described resource.
     *
     * @var Text
     */
    protected $accessibilityControl = null;
    
    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility.
     *
     * @var Text
     */
    protected $accessibilityFeature = null;
    
    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3.
     *
     * @var Text
     */
    protected $accessibilityHazard = null;
    
    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     * @var Person
     */
    protected $accountablePerson = null;
    
    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating 
     */
    protected $aggregateRating = null;
    
    /**
     * A secondary title of the CreativeWork.
     *
     * @var Text
     */
    protected $alternativeHeadline = null;
    
    /**
     * A media object that encodes this CreativeWork. This property is a synonym for " Encoding ".
     *
     * @var MediaObject
     * @see Encoding
     */
    protected $associatedMedia = null;
    
    /**
     * An intended audience, i.e. a group for whom something was created. Supersedes " serviceAudience ".
     *
     * @var Audience
     * @see serviceAudience
     */
    protected $audience = null;
    
    /**
     * An embedded audio object.
     *
     * @var AudioObject
     */
    protected $audio = null;
    
    /**
     * The author of this content.
     * Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag.
     * That is equivalent to this and may be used interchangeably.
     *
     * @var Organization | Person
     */
    protected $author = null;
    
    /**
     * An award won by or for this item. Supersedes " awards ".
     *
     * @var Text
     * @see awards
     */
    protected $award = null;
    
    /**
     * Fictional person connected with a creative work.
     *
     * @var Person
     */
    protected $character = null;
    
    /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     *
     * @var CreativeWork | Text
     */
    protected $citation = null;
    
    /**
     * Comments, typically from users.
     *
     * @var Comment
     */
    protected $comment = null;
    
    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received.
     * This is most applicable to works published in Web sites with commenting system ; additional comments may exist elsewhere.
     *
     * @var Integer
     */
    protected $commentCount = null;
    
    /**
     * The location depicted or described in the content. For example, the location in a photograph or painting.
     *
     * @var Place
     */
    protected $contentLocation = null;
    
    /**
     * Official rating of a piece of content—for example," MPAA PG-13 ".
     *
     * @var Text
     */
    protected $contentRating = null;
    
    /**
     * A secondary contributor to the CreativeWork.
     *
     * @var Organization | Person 
     */
    protected $contributor = null;
    
    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     * @var Organization | Person
     */
    protected $copyrightHolder = null;
    
    /**
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     *
     * @var Number
     */
    protected $copyrightYear = null;
    
    /**
     * The creator / author of this CreativeWork. This is the same as the Author property for CreativeWork.
     *
     * @var Organization | Person
     */
    protected $creator = null;
    
    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     *
     * @var Date | DateTime 
     */
    protected $dateCreated = null;
    
    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     *
     * @var Date | DateTime 
     */
    protected $dateModified = null;
    
    /**
     * Date of first broadcast / publication.
     *
     * @var Date
     */
    protected $datePublished = null;
    
    /**
     * A link to the page containing the comments of the CreativeWork.
     *
     * @var Url
     */
    protected $discussionUrl = null;
    
    /**
     * Specifies the Person who edited the CreativeWork.
     *
     * @var Person
     */
    protected $editor = null;
    
    /**
     * An alignment to an established educational framework.
     *
     * @var AlignmentObject
     */
    protected $educationalAlignment = null;
    
    /**
     * The purpose of a work in the context of education ; for example, " assignment ", " group work ".
     *
     * @var Text
     */
    protected $educationalUse = null;
    
    /**
     * A media object that encodes this CreativeWork. This property is a synonym for " AssociatedMedia ". Supersedes " encodings ".
     *
     * @var  MediaObject
     * @see AssociatedMedia
     * @see encodings
     */
    protected $encoding = null;
    
    /**
     * A creative work that this work is an example / instance / realization / derivation of. Inverse property : " workExample ".
     *
     * @var CreativeWork
     * @see workExample
     */
    protected $exampleOfWork = null;
    
    /**
     * Media type (aka MIME format, see IANA site) of the content e.g. application/zip of a SoftwareApplication binary.
     * In cases where a CreativeWork has several media type representations, " encoding " can be used to indicate each MediaObject alongside particular fileFormat information.
     *
     * @var Text
     */
    protected $fileFormat = null;
    
    /**
     * Genre of the creative work or group.
     *
     * @var Text | Url
     */
    protected $genre = null;
    
    /**
     * Indicates a CreativeWork that is (in some sense) a part of this CreativeWork. Inverse property : " isPartOf ".
     *
     * @var CreativeWork
     * @see isPartOf
     */
    protected $hasPart = null;
    
    /**
     * Headline of the article.
     *
     * @var Text
     */
    protected $headline = null;
    
    /**
     * The language of the content or performance or used in an action.
     * Please use one of the language codes from the IETF BCP 47 standard.
     * Supersedes " language ".
     *
     * @var Text | Language
     * @see language
     */
    protected $inLanguage = null;
    
    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
     * The most specific child type of InteractionCounter should be used. Supersedes " interactionCount ".
     *
     * @var InteractionCounter
     * @see interactionCount
     */
    protected $interactionStatistic = null;
    
    /**
     * The predominant mode of learning supported by the learning resource.
     * Acceptable values are " active ", " expositive " or " mixed ".
     *
     * @var Text
     */
    protected $interactivityType = null;
    
    /**
     * A resource that was used in the creation of this resource.
     * This term can be repeated for multiple sources.
     * For example, http://example.com/great-multiplication-intro.html.
     *
     * @var Url
     */
    protected $isBasedOnUrl = null;
    
    /**
     * Indicates whether this content is family friendly.
     *
     * @var Boolean
     */
    protected $isFamilyFriendly = null;
    
    /**
     * Indicates a CreativeWork that this CreativeWork is (in some sense) part of. Inverse property : " hasPart ".
     *
     * @var CreativeWork
     * @see hasPart
     */
    protected $isPartOf = null;
    
    /**
     * Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.
     *
     * @var Text
     */
    protected $keywords = null;
    
    /**
     * The predominant type or kind characterizing the learning resource. For example, " presentation ", " handout ".
     *
     * @var Text
     */
    protected $learningResourceType 	 = null;
    
    /**
     * A license document that applies to this content, typically indicated by URL.
     *
     * @var CreativeWork | Url
     */
    protected $license = null;
    
    /**
     * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
     *
     * @var Place
     */
    protected $locationCreated = null;
    
    /**
     * Indicates the primary entity described in some page or other CreativeWork. Inverse property : " mainEntityOfPage ".
     *
     * @var Thing
     * @see mainEntityOfPage
     */
    protected $mainEntity = null;
    
    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     *
     * @var Thing
     */
    protected $mentions = null;
    
    /**
     * An offer to provide this item - for example, an offer to sell a product, rent the DVD of a movie, perform a service or give away tickets to an event.
     *
     * @var Offer
     */
    protected $offers = null;
    
    /**
     * The position of an item in a series or sequence of items.
     *
     * @var Integer | Text
     */
    protected $position = null;
    
    /**
     * The person or organization who produced the work (e.g. music album, movie, TV / radio series, etc.).
     *
     * @var Organization | Person
     */
    protected $producer = null;
    
    /**
     * The service provider, service operator or service performer; the goods producer.
     * Another party (a seller) may offer those services or goods on behalf of the provider.
     * A provider may also serve as the seller.
     * Supersedes " carrier ".
     *
     * @var Organization | Person
     * @see carrier
     */
    protected $provider = null;
    
    /**
     * A publication event associated with the item.
     *
     * @var PublicationEvent
     */
    protected $publication = null;
    
    /**
     * The publisher of the creative work.
     *
     * @var Organization | Person
     */
    protected $publisher = null;
    
    /**
     * Link to page describing the editorial principles of the organization primarily responsible for the creation of the CreativeWork.
     *
     * @var Url
     */
    protected $publishingPrinciple = null;
    
    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event. Inverse property : " recordedIn ".
     *
     * @var Event
     * @see recordedIn
     */
    protected $recordedAt = null;
    
    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     *
     * @var PublicationEvent
     */
    protected $releasedEvent = null;
    
    /**
     * A review of the item. Supersedes " reviews ".
     *
     * @var Review
     * @see reviews
     */
    protected $review = null;
    
    /**
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork.
     * For example, a document could declare a schemaVersion using a URL such as http://schema.org/version/2.0/ if precise indication of schema version was required by some application. 
     *
     * @var Text | Url
     */
    protected $schemaVersion = null;
    
    /**
     * The Organization on whose behalf the creator was working.
     *
     * @var Organization
     */
    protected $sourceOrganization = null;
    
    /**
     * The textual content of this CreativeWork.
     *
     * @var Text
     */
    protected $text = null;
    
    /**
     * A thumbnail image relevant to the Thing.
     *
     * @var Url
     */
    protected $thumbnailUrl = null;
    
    /**
     * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'P30M', 'P1H25M'.
     *
     * @var Duration
     */
    protected $timeRequired = null;
    
    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market.
     *
     * @var Organization | Person 
     */
    protected $translator = null;
    
    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @var Text
     */
    protected $typicalAgeRange = null;
    
    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     * @var Number
     */
    protected $version = null;
    
    /**
     *	An embedded video object.
     *
     * @var VideoObject
     */
    protected $video = null;
    
    /**
     * Example / instance / realization / derivation of the concept of this creative work. eg. The paperback edition, first edition or eBook.
     * Inverse property : " exampleOfWork ".
     *
     * @var CreativeWork
     * @see exampleOfWork
     */
    protected $workExample = null;
}