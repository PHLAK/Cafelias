<?php

use PHLAK\Cafelias\Codename;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class CodenameTest extends TestCase
{
    public function testItCanGenerateACodename()
    {
        $codename = new Codename();

        $this->assertRegexp('/^([a-z]+)(?:-([a-z]+))+$/', (string) $codename);
    }

    public function testItCanGenerateACodenameStaticaly()
    {
        $codename = Codename::make();

        $this->assertRegexp('/^([a-z]+)(?:-([a-z]+))+$/', (string) $codename);
    }

    public function testItCanGenerateACodenameWithTheHelperMethod()
    {
        $codename = cafelias();

        $this->assertRegexp('/^([a-z]+)(?:-([a-z]+))+$/', (string) $codename);
    }
}
