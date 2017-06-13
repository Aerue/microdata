<?php
namespace MicroData\Thing\CreativeWork\MediaObject;

use MicroData\Thing\CreativeWork\MediaObject;

/**
 * An image file.
 */
class AudioObject extends MediaObject {
    /**
     * The caption for this object.
     *
     * @var Text
     */
    protected $caption = null;
    
    /**
     * Exif data for this object.
     *
     * @var Text | PropertyValue 
     */
    protected $exifData = null;
    
    /**
     * Indicates whether this image is representative of the content of the page.
     *
     * @var Boolean
     */
    protected $representativeOfPage = null;
    
    /**
     * Thumbnail image for an image or video.
     *
     * @var ImageObject
     */
    protected $thumbnail = null;
}