<?php
namespace MicroData;

/**
 * The basic data types such as Integers, Strings, etc.
 */
abstract class DataType extends MicroData {
    /**
     * Value of an object from this type.
     *
     * @var mixed
     */
    protected $value = null;
    
    /**
     * Set the value.
     */
    public function __construct($value = null) {
        $this->value = $value;
    }
    
    /**
     */
    public function __toString() {
        return strval($this->value);
    }
}