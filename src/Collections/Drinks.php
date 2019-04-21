<?php

namespace PHLAK\Cafelias\Collections;

use Tightenco\Collect\Support\Collection;

final class Drinks extends Collection
{
    /**
     * Create a new Drinks collection.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct([
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
            'irish-coffee',
            'latte',
            'lungo',
            'macchiato',
            'mocha',
            'pour-over',
            'ristretto'
        ]);
    }
}
