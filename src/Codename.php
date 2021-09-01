<?php

namespace PHLAK\Cafelias;

use PHLAK\Cafelias\Collections\Drinks;
use PHLAK\Cafelias\Collections\Varriants;

class Codename
{
    /** @var string The codename string. */
    protected $codename;

    /** Create a new Codename object. */
    public function __construct()
    {
        $varriant = (new Varriants)->random();
        $drink = (new Drinks)->random();

        $this->codename = "{$varriant}-{$drink}";
    }

    /** Convert the object to a string. */
    public function __toString(): string
    {
        return $this->codename;
    }

    /** Create a new Codename object statically. */
    public static function make(): self
    {
        return new static;
    }
}
