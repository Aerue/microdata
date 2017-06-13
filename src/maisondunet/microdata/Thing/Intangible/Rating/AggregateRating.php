<?php
namespace Maisondunet\Microdata\Thing\Intangible\Rating;

use Maisondunet\Microdata\Thing\Intangible\Rating;

/**
 * The average rating based on multiple ratings or reviews.
 */
class AggregateRating extends Rating {
    /**
     * 	The item that is being reviewed / rated.
     *
     * @var Thing
     */
    protected $itemReviewed = null;
    
    /**
     * The count of total number of ratings.
     *
     * @var Integer
     */
    protected $ratingCount = null;
    
    /**
     * The count of total number of reviews.
     *
     * @var Integer
     */
    protected $reviewCount = null;
}