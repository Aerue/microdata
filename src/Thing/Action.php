<?php
namespace Maisondunet\Microdata\Thing;

use Maisondunet\Microdata\Thing;

/**
 * An action performed by a direct agent and indirect participants upon a direct object.
 * Optionally happens at a location with the help of an inanimate instrument.
 * The execution of the action may produce a result.
 * Specific action sub-type documentation specifies the exact expectation of each argument / role. 
 */
class Action extends Thing {
    /**
     * Indicates the current disposition of the Action.
     *
     * @var ActionStatusType
     */
    protected $actionStatus = null;
    
    /**
     * The direct performer or driver of the action (animate or inanimate). Example : *John* wrote a book.
     *
     * @var Person | Organization 
     */
    protected $agent = null;
    
    /**
     * The endTime of something.
     * For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end.
     * For actions that span a period of time, when the action was performed.
     * E.g. John wrote a book from January to *December*.
     * Note that Event uses startDate / endDate instead of startTime / endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     * @var DateTime
     */
    protected $endTime = null;
    
    /**
     * For failed actions, more information on the cause of the failure.
     *
     * @var Thing
     */
    protected $error = null;
    
    /**
     * The object that helped the agent perform the action. Example : John wrote a book with *a pen*.
     *
     * @var Thing
     */
    protected $instrument = null;
    
    /**
     * The location of for example where the event is happening, an organization is located or where an action takes place.
     *
     * @var Place| Text | PostalAddress 
     */
    protected $location = null;
    
    /**
     * The object upon the action is carried out, whose state is kept intact or changed.
     * Also known as the semantic roles patient, affected or undergoes (which change their state) or theme (which doesn't).
     * Example : John read *a book*.
     *
     * @var Thing
     */
    protected $object = null;
    
    /**
     * Other co-agents that participated in the action indirectly.
     * Example : John wrote a book with *Steve*.
     *
     * @var Person | Organization 
     */
    protected $participant = null;
    
    /**
     * The result produced in the action.
     * Example : John wrote *a book*.
     *
     * @var Thing
     */
    protected $result = null;
    
    /**
     * The startTime of something.
     * For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start.
     * For actions that span a period of time, when the action was performed.
     * Example : John wrote a book from *January* to December.
     * Note that Event uses startDate / endDate instead of startTime / endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     * @var DateTime
     */
    protected $startTime = null;
    
    /**
     * Indicates a target EntryPoint for an Action.
     *
     * @var EntryPoint
     */
    protected $target = null;
}