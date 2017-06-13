<?php
namespace MicroData\Thing\CreativeWork\MediaObject\ImageObject;

use MicroData\Thing\CreativeWork\MediaObject\ImageObject;

/**
 * An image file.
 */
class Barcode extends ImageObject {
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