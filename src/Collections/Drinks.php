<?php

namespace PHLAK\Cafelias\Collections;

use Tightenco\Collect\Support\Collection;

/** @extends Collection<int, string> */
final class Drinks extends Collection
{
    /** @var array<int, string> The items contained in the collection. */
    protected $items = [
        'affogato',
        'americano',
        'breve',
        'cafe-au-lait',
        'cafe-crema',
        'cafe-zorro',
        'cappuccino',
        'coffee',
        'cold-brew',
        'cortado',
        'cubano',
        'drip-coffee',
        'espresso',
        'flat-white',
        'frappe',
        'frappuccino',
        'french-press-coffee',
        'iced-coffee',
        'iced-latte',
        'iced-mocha',
        'irish-coffee',
        'latte',
        'lungo',
        'macchiato',
        'mocha',
        'pour-over',
        'ristretto',
    ];

    /** Create a new Drinks collection. */
    public function __construct($items = null)
    {
        if (isset($items)) {
            parent::__construct($items);
        }
    }
}
