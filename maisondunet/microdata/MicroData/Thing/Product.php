<?php
namespace MicroData\Thing;

use MicroData\Thing;

/**
 * Any offered product or service.
 *
 * For example : a pair of shoes, a concert ticket, the rental of a car, a haircut or an episode of a TV show streamed online.
 */
class Product extends Thing {
    /**
     * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.
     *
     * Note : Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, et.) will typically expect such data to be provided using those properties, rather than using the generic property / value mechanism.
     *
     * @var PropertyValue
     */
    protected $additionalProperty = null;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating
     */
    protected $aggregateRating = null;

    /**
     * An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.
     *
     * @var Audience
     * @see serviceAudience
     */
    protected $audience = null;

    /**
     * An award won by or for this item. Supersedes awards.
     *
     * @var Text
     * @see awards
     */
    protected $award = null;

    /**
     * The brand(s) associated with a product or service or the brand(s) maintained by an organization or business person.
     *
     * @var Brand | Organization
     */
    protected $brand = null;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @var Thing | Text | PhysicalActivityCategory
     */
    protected $category = null;

    /**
     * The color of the product.
     *
     * @var Text
     */
    protected $color = null;

    /**
     * The depth of the item.
     *
     * @var Distance | QuantitativeValue
     */
    protected $depth = null;

    /**
     * The GTIN-12 code of the product or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See GS1 GTIN Summary for more details.
     *
     * @var Text
     */
    protected $gtin12 = null;

    /**
     * The GTIN-13 code of the product or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See GS1 GTIN Summary for more details.
     *
     * @var Text
     */
    protected $gtin13 = null;

    /**
     * The GTIN-14 code of the product or the product to which the offer refers. See GS1 GTIN Summary for more details.
     *
     * @var Text
     */
    protected $gtin14 = null;

    /**
     * The GTIN-8 code of the product or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See GS1 GTIN Summary for more details.
     *
     * @var Text
     */
    protected $gtin8 = null;

    /**
     * The height of the item.
     *
     * @var Distance | QuantitativeValue
     */
    protected $height = null;

    /**
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
     *
     * @var Product
     */
    protected $isAccessoryOrSparePartFor = null;

    /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
     *
     * @var Product
     */
    protected $isConsumableFor = null;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @var Product
     */
    protected $isRelatedTo = null;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @var Product
     */
    protected $isSimilarTo = null;

    /**
     * A predefined value from OfferItemCondition or a textual description of the condition of the product or service or the products or services included in the offer.
     *
     * @var OfferItemCondition
     */
    protected $itemCondition = null;

    /**
     * An associated logo.
     *
     * @var ImageObject | URL
     */
    protected $logo = null;

    /**
     * The manufacturer of the product.
     *
     * @var Organization
     */
    protected $manufacturer = null;

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8 / gtin13 / gtin14 and mpn properties.
     *
     * @var ProductModel | Text
     * @see gtin8
     * @see gtin13
     * @see gtin14
     * @see mpn
     */
    protected $model = null;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     * @var Text
     */
    protected $mpn = null;

    /**
     * An offer to provide this item.
     *
     * For example : an offer to sell a product, rent the DVD of a movie, perform a service or give away tickets to an event.
     *
     * @var Offer
     */
    protected $offers = null;

    /**
     * The product identifier, such as ISBN. For example: <meta itemprop="productID" content="isbn:123-456-789" />.
     *
     * @var Text
     */
    protected $productID = null;

    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @var Date
     */
    protected $productionDate = null;

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     *
     * @var Date
     */
    protected $purchaseDate = null;

    /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
     *
     * @var Date
     */
    protected $releaseDate = null;

    /**
     * A review of the item. Supersedes reviews.
     *
     * @var Review
     * @see reviews
     */
    protected $review = null;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service or the product to which the offer refers.
     *
     * @var Text
     */
    protected $sku = null;

    /**
     * The weight of the product.
     *
     *
     * @var QuantitativeValue
     */
    protected $weight = null;

    /**
     * The width of the item.
     *
     * @var Distance | QuantitativeValue
     */
    protected $width = null;
}