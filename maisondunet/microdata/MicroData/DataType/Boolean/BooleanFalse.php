<?php
namespace MicroData\DataType\Boolean;

use MicroData\DataType\Boolean;

/**
 * The boolean value false.
 */
class BooleanFalse extends Boolean {
    /**
     * Set the value.
     */
    public function __construct($value = null) {
        $this->value = false;
    }
}