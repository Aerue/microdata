<?php
namespace MicroData\Thing\Intangible;

use MicroData\Thing\Intangible;

/**
 * A demand entity represents the public, not necessarily binding, not necessarily exclusive, announcement by an organization or person to seek a certain type of goods or services. For describing demand using this type, the very same properties used for Offer apply.
 */
class Demand extends Intangible {
    /**
     * The payment method(s) accepted by seller for this offer.
     *
     * @var PaymentMethod
     */
    protected $acceptedPaymentMethod = null;

    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     *
     * @var QuantitativeValue
     */
    protected $advanceBookingRequirement = null;

    /**
     * The geographic area where a service or offered item is provided. Supersedes serviceArea.
     *
     * @var Text | GeoShape | AdministrativeArea | Place
     * @see serviceArea
     */
    protected $areaServed = null;

    /**
     * The availability of this item - for example In stock, Out of stock, Pre-order, etc.
     *
     * @var ItemAvailability
     */
    protected $availability = null;

    /**
     * The end of the availability of the product or service included in the offer.
     *
     * @var DateTime
     */
    protected $availabilityEnds = null;

    /**
     * The beginning of the availability of the product or service included in the offer.
     *
     * @var DateTime
     */
    protected $availabilityStarts = null;

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     *
     * @var Place
     */
    protected $availableAtOrFrom = null;

    /**
     * The delivery method(s) available for this offer.
     *
     * @var DeliveryMethod
     */
    protected $availableDeliveryMethod = null;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     *
     * @var BusinessFunction
     */
    protected $businessFunction = null;

    /**
     * The typical delay between the receipt of the order and the goods leaving the warehouse.
     *
     * @var QuantitativeValue
     */
    protected $deliveryLeadTime = null;

    /**
     * The type(s) of customers for which the given offer is valid.
     *
     * @var BusinessEntityType
     */
    protected $eligibleCustomerType = null;

    /**
     * The duration for which the given offer is valid.
     *
     * @var QuantitativeValue
     */
    protected $eligibleDuration = null;

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     *
     * @var QuantitativeValue
     */
    protected $eligibleQuantity = null;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
     *
     * @var Text | GeoShape | Place
     * @see ineligibleRegion
     */
    protected $eligibleRegion = null;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @var PriceSpecification
     */
    protected $eligibleTransactionVolume = null;

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
     * This links to a node or nodes indicating the exact quantity of the products included in the offer.
     *
     * @var TypeAndQuantityNode
     */
    protected $includesObject = null;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.
     *
     * @var Text | GeoShape | Place
     */
    protected $ineligibleRegion = null;

    /**
     * The current approximate inventory level for the item or items.
     *
     * @var QuantitativeValue
     */
    protected $inventoryLevel = null;

    /**
     * 	A predefined value from OfferItemCondition or a textual description of the condition of the product or service or the products or services included in the offer.
     *
     * @var OfferItemCondition
     */
    protected $itemCondition = null;

    /**
     * The item being offered.
     *
     * @var  Product | Service
     */
    protected $itemOffered = null;

    /**
     * The Manufacturer Part Number (MPN) of the product or the product to which the offer refers.
     *
     * @var Text
     */
    protected $mpn = null;

    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     *
     * @var PriceSpecification
     */
    protected $priceSpecification = null;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a provider. Supersedes vendor, merchant.
     *
     * @var Person | Organization
     * @see vendor
     * @see merchant
     */
    protected $seller = null;

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     *
     * @var Text
     */
    protected $serialNumber = null;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service or the product to which the offer refers.
     *
     * @var Text
     */
    protected $sku = null;

    /**
     * The date when the item becomes valid.
     *
     * @var DateTime
     */
    protected $validFrom = null;

    /**
     * The end of the validity of offer, price specification or opening hours data.
     *
     * @var DateTime
     */
    protected $validThrough = null;

    /**
     * The warranty promise(s) included in the offer. Supersedes warrantyPromise.
     *
     * @var WarrantyPromise
     * @see warrantyPromise
     */
    protected $warranty = null;
}