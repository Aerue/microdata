<?php
namespace MicroData\DataType\Number;

use MicroData\DataType\Number;

class NumberInteger extends Number {
    /**
     * Set the value.
     */
    public function __construct($value = null) {
        $this->value = intval($value);
    }
}