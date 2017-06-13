<?php
namespace MicroData\Thing\CreativeWork;

use MicroData\Thing\CreativeWork;

/**
 * 
 */
class WebPage extends CreativeWork {
    /**
     * A set of links that can help a user understand and navigate a website hierarchy.
     *
     * @var BreadcrumbList | Text
     */
    protected $breadcrumb = null;
    
    /**
     * Date on which the content on this web page was last reviewed for accuracy and / or completeness.
     *
     * @var Date
     */
    protected $lastReviewed = null;
    
    /**
     * Indicates if this web page element is the main subject of the page.
     *
     * @var WebPageElement
     */
    protected $mainContentOfPage = null;
    
    /**
     * Indicates the main image on the page.
     *
     * @var ImageObject
     */
    protected $primaryImageOfPage = null;
    
    /**
     * A link related to this web page, for example to other related web pages.
     *
     * @var URL
     */
    protected $relatedLink = null;
    
    /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
     *
     * @var Organization | Person
     */
    protected $reviewedBy = null;
    
    /**
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most. Supersedes significantLinks.
     *
     * @var URL
     */
    protected $significantLink = null;
    
    /**
     * One of the domain specialities to which this web page's content applies.
     *
     * @var Specialty
     */
    protected $specialty = null;
}