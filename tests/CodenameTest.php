<?php

use PHLAK\Cafelias\Codename;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class CodenameTest extends TestCase
{
    public function testItCanGenerateACodename()
    {
        $codename = new Codename();

        $this->assertMatchesRegularExpression('/^([a-z]+)(?:-([a-z]+))+$/', (string) $codename);
    }

    public function testItCanGenerateACodenameStaticaly()
    {
        $codename = Codename::make();

        $this->assertMatchesRegularExpression('/^([a-z]+)(?:-([a-z]+))+$/', (string) $codename);
    }

    public function testItCanGenerateACodenameWithTheHelperMethod()
    {
        $codename = cafelias();

        $this->assertMatchesRegularExpression('/^([a-z]+)(?:-([a-z]+))+$/', (string) $codename);
    }
}
