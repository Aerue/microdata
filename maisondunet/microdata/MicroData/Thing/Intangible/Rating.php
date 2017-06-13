<?php
namespace MicroData\Thing\Intangible;

use MicroData\Thing\Intangible;

/**
 * A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
 */
class Rating extends Intangible {
    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @var Organization | Person
     */
    protected $author = null;
    
    /**
     * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
     *
     * @var Number | Text
     */
    protected $bestRating = null;
    
    /**
     * The rating for the content.
     *
     * @var Number | Text
     */
    protected $ratingValue = null;
    
    /**
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
     *
     * @var Number | Text
     */
    protected $worstRating = null;
}