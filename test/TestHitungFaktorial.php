<?php
require 'question/HitungFaktorial.php'; 

use PHPUnit\Framework\TestCase;

// ! Cara run php test: vendor/bin/phpunit test/TestHitungFaktorial.php

class TestHitungFaktorial extends TestCase {
    public function testFaktorialLima() {
        $hasil = faktorial(5);
        $this->assertEquals(120, $hasil, 'Test case 1: Faktorial dari 5');
    }

    public function testFaktorialNol() {
        $hasil = faktorial(0);
        $this->assertEquals(1, $hasil, 'Test case 2: Faktorial dari 0');
    }

    public function testFaktorialSatu() {
        $hasil = faktorial(1);
        $this->assertEquals(1, $hasil, 'Test case 3: Faktorial dari 1');
    }
}
?>
