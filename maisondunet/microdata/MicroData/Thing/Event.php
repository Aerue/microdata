<?php
namespace MicroData\Thing;

use MicroData\Thing;

/**
 *  An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the 'offers' property. Repeated events may be structured as separate Event objects.
 */
class Event extends Thing {
    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating
     */
    protected $aggregateRating = null;

    /**
     * A person or organization attending the event. Supersedes attendees.
     *
     * @var Person | Organization
     * @see attendees
     */
    protected $attendee = null;

    /**
     * The time admission will commence.
     *
     * @var DateTime
     */
    protected $doorTime = null;

    /**
     * The duration of the item (movie, audio recording, event, etc) in ISO 8601 date format.
     *
     * @var Duration
     */
    protected $duration = null;

    /**
     * The end date and time of the item (in ISO 8601 date format).
     *
     * @var Date
     */
    protected $endDate = null;

    /**
     * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
     *
     * @var EventStatusType
     */
    protected $eventStatus = null;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the IETF BCP 47 standard. Supersedes language.
     *
     * @var Text | Language
     * @see language
     */
    protected $inLanguage = null;

    /**
     * The location of for example where the event is happening, an organization is located or where an action takes place.
     *
     * @var Place | Text | PostalAddress
     */
    protected $location = null;

    /**
     * An offer to provide this item.
     *
     * For example, an offer to sell a product, rent the DVD of a movie, perform a service or give away tickets to an event.
     *
     * @var Offer
     */
    protected $offers = null;

    /**
     * An organizer of an event.
     *
     * @var Person | Organization
     */
    protected $organizer = null;

    /**
     * A performer at the event.
     *
     * For example, a presenter, musician, musical group or actor. Supersedes performers.
     *
     * @var Person | Organization
     * @see performers
     */
    protected $performer = null;

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
     *
     * @var Date
     */
    protected $previousStartDate = null;

    /**
     * The CreativeWork that captured all or part of this Event.
     * Inverse property : recordedAt.
     *
     * @var CreativeWork
     * @see recordedAt
     */
    protected $recordedIn = null;

    /**
     * A review of the item. Supersedes reviews.
     *
     * @var Review
     * @see reviews
     */
    protected $review = null;

    /**
     * The start date and time of the item (in ISO 8601 date format).
     *
     * @var Date
     */
    protected $startDate = null;

    /**
     * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference. Supersedes subEvents.
     *
     * @var Event
     * @see subEvents
     */
    protected $subEvent = null;

    /**
     * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
     *
     * @var Event
     * @see superEvents
     */
    protected $superEvent = null;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @var Text
     */
    protected $typicalAgeRange = null;

    /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent. Specific subproperties are available for workPerformed (e.g. a play), or a workPresented (a Movie at a ScreeningEvent).
     *
     * @var CreativeWork
     */
    protected $workFeatured = null;

    /**
     * A work performed in some event, for example a play performed in a TheaterEvent.
     *
     * @var CreativeWork
     */
    protected $workPerformed = null;
}