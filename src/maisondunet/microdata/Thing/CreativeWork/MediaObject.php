<?php
namespace Maisondunet\Microdata\Thing\CreativeWork;

use Maisondunet\Microdata\Thing\CreativeWork;

/**
 * An image, video or audio object embedded in a web page.
 * Note that a creative work may have many media objects associated with it on the same web page.
 * For example, a page about a single song (MusicRecording) may have a music video (VideoObject) and a high and low bandwidth audio stream (2 AudioObject's).
 */
class MediaObject extends CreativeWork {
    /**
     * A NewsArticle associated with the Media Object.
     *
     * @var NewsArticle
     */
    protected $associatedArticle = null;
    
    /**
     * The bitrate of the media object.
     *
     * @var Text
     */
    protected $bitrate = null;
    
    /**
     * File size in (mega / kilo) bytes.
     *
     * @var Text
     */
    protected $contentSize = null;
    
    /**
     * Actual bytes of the media object, for example the image file or video file.
     *
     * @var Url
     */
    protected $contentUrl = null;
    
    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
     *
     * @var Duration
     */
    protected $duration = null;
    
    /**
     * A URL pointing to a player for a specific video.
     * In general, this is the information in the src element of an embed tag and should not be the same as the content of the loc tag.
     *
     * @var Url
     */
    protected $embedUrl = null;
    
    /**
     * The CreativeWork encoded by this media object.
     *
     * @var CreativeWork
     */
    protected $encodesCreativeWork = null;
    
    /**
     * MP3, MPEG4, etc.
     *
     * @var Text
     */
    protected $encodingFormat = null;
    
    /**
     * Date the content expires and is no longer useful or available. Useful for videos.
     *
     * @var Date
     */
    protected $expires = null;
    
    /**
     * The height of the item.
     *
     * @var QuantitativeValue | Distance 
     */
    protected $height = null;
    
    /**
     * Player type required. For example, Flash or Silverlight.
     *
     * @var Text
     */
    protected $playerType = null;
    
    /**
     * The production company or studio responsible for the item e.g. series, video game, episode, etc.
     *
     * @var Organization
     */
    protected $productionCompany = null;
    
    /**
     * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere.
     * Specify the countries in ISO 3166 format.
     *
     * @var Place
     */
    protected $regionsAllowed = null;
    
    /**
     * Indicates if use of the media require a subscription (either paid or free).
     * Allowed values are true or false (note that an earlier version had " yes ", " no ").
     *
     * @var Boolean
     */
    protected $requiresSubscription = null;
    
    /**
     * Date when this media object was uploaded to this site.
     *
     * @var Date
     */
    protected $uploadDate = null;
    
    /**
     * The width of the item.
     *
     * @var QuantitativeValue | Distance 
     */
    protected $width = null;
}