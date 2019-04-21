<?php

use PHLAK\Cafelias\Codename;

if (! function_exists('cafelias')) {
    /**
     * Create a Twine string object.
     *
     * @return \PHLAK\Cafelias\Codename
     */
    function cafelias()
    {
        return new Codename;
    }
}
