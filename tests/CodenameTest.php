<?php

use PHLAK\Cafelias\Codename;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class CodenameTest extends TestCase
{
    public function test_it_can_generate_a_codename(): void
    {
        $codename = new Codename();

        $this->assertMatchesRegularExpression('/^([a-z]+)(?:-([a-z]+))+$/', (string) $codename);
    }

    public function test_it_can_generate_a_codename_staticaly(): void
    {
        $codename = Codename::make();

        $this->assertMatchesRegularExpression('/^([a-z]+)(?:-([a-z]+))+$/', (string) $codename);
    }

    public function test_it_can_generate_a_codename_with_the_helper_method(): void
    {
        $codename = cafelias();

        $this->assertMatchesRegularExpression('/^([a-z]+)(?:-([a-z]+))+$/', (string) $codename);
    }
}
