<?php

use Pafelin\Laravel4GermanSlug\Slug;

class SlugTest extends PHPUnit_Framework_TestCase {

    private function getSlug() {
        return new Slug();
    }

    public function testMakeU() {
        $string = 'für';
        $shouldBe = 'fuer';
        $this->assertEquals($shouldBe, $this->getSlug()->make($string));
    }

    public function testMakeA() {
        $string = 'Täglich';
        $shouldBe = 'taeglich';
        $this->assertEquals($shouldBe, $this->getSlug()->make($string));
    }

    public function testMakeS() {
        $string = 'Heiß';
        $shouldBe = 'heiss';
        $this->assertEquals($shouldBe, $this->getSlug()->make($string));
    }

    public function testMakeSeparator() {
        $string = 'zwei worten';
        $shouldBe = 'zwei-worten';
        $this->assertEquals($shouldBe, $this->getSlug()->make($string));
    }

    public function testMakeRealSlug() {
        $string = 'BÖse Mädchen überqueren die Straße.';
        $shouldBe = 'boese-maedchen-ueberqueren-die-strasse';
        $this->assertEquals($shouldBe, $this->getSlug()->make($string));
    }
}
 