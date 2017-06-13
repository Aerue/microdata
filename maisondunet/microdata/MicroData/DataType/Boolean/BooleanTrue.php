<?php
namespace MicroData\DataType\Boolean;

use MicroData\DataType\Boolean;

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