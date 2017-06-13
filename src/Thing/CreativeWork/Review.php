<?php
namespace Maisondunet\Microdata\Thing\CreativeWork;

use Maisondunet\Microdata\Thing\CreativeWork;

/**
 * 
 */
class Review extends CreativeWork {
    /**
     * The item that is being reviewed / rated.
     *
     * @var Thing
     */
    protected $itemReviewed = null;
    
    /**
     * The actual body of the review.
     *
     * @var Text
     */
    protected $reviewBody = null;
    
    /**
     * The rating given in this review. Note that reviews can themselves be rated.
     * 
     * The reviewRating applies to rating given by the review. The aggregateRating property applies to the review itself, as a creative work.
     *
     * @var Rating
     */
    protected $reviewRating = null;
}