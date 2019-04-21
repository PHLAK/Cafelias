<?php

use PHPUnit\Framework\TestCase;
use PHLAK\Cafelias\Codename;

class CodenameTest extends TestCase
{
    public function test_it_can_generate_a_codename()
    {
        $codename = new Codename();

        $this->assertRegexp('/^([a-z]+)(?:-([a-z]+))+$/', $codename);
    }

    public function test_it_can_generate_a_codename_staticaly()
    {
        $codename = Codename::make();

        $this->assertRegexp('/^([a-z]+)(?:-([a-z]+))+$/', $codename);
    }

    public function test_it_can_generate_a_codename_with_the_helper_method()
    {
        $codename = cafelias();

        $this->assertRegexp('/^([a-z]+)(?:-([a-z]+))+$/', $codename);
    }
}
