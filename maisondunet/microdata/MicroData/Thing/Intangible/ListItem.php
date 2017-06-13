<?php
namespace MicroData\Thing\Intangible;

use MicroData\Thing\Intangible;

/**
 * 
 */
class ListItem extends Intangible {
    /**
     * An entity represented by an entry in a list or data feed (e.g. an " artist " in a list of " artists" ).
     *
     * @var Thing
     */
    protected $item = null;
    /**
     * A link to the ListItem that follows the current one.
     *
     * @var ListItem
     */
    protected $nextItem = null;
    /**
     * The position of an item in a series or sequence of items.
     *
     * @var Integer | Text 
     */
    protected $position = null;
    /**
     * 	A link to the ListItem that preceeds the current one.
     *
     * @var ListItem
     */
    protected $previousItem = null;
}