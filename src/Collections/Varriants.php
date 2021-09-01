<?php

namespace PHLAK\Cafelias\Collections;

use Tightenco\Collect\Support\Collection;

final class Varriants extends Collection
{
    /** @var array The items contained in the collection. */
    protected $items = [
        'almond',
        'brown-sugar',
        'butterscotch',
        'caramel',
        'chestnut',
        'chocolate',
        'cinnamon',
        'cocolate-chip',
        'coconut',
        'creme-de-menth',
        'decaf',
        'double',
        'english-toffee',
        'french-vanilla',
        'gingerbread',
        'grande',
        'hazelnut',
        'macadamia',
        'marshmallow',
        'mint',
        'mocha',
        'peanut-butter',
        'peppermint',
        'pumpkin-spice',
        'salted-caramel',
        'short',
        'single',
        'tall',
        'toffee',
        'trenta',
        'triple',
        'vanilla',
        'venti',
        'white-chocolate',
    ];

    /**
     * Create a new Varriants collection.
     *
     * @param mixed $items
     */
    public function __construct($items = null)
    {
        if (isset($items)) {
            parent::__construct($items);
        }
    }
}
