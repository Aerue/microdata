<?php
namespace Maisondunet\Microdata\DataType\Boolean;

use Maisondunet\Microdata\DataType\Boolean;

/**
 * The boolean value true.
 */
class BooleanTrue extends Boolean {
    /**
     * Set the value.
     */
    public function __construct($value = null) {
        $this->value = true;
    }
}