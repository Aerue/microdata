<?php
namespace Maisondunet\Microdata\DataType\Number;

use Maisondunet\Microdata\DataType\Number;

class NumberFloat extends Number {
    /**
     * Set the value.
     */
    public function __construct($value = null) {
        $this->value = floatval($value);
    }
}