<?php
require 'question/HitungHuruf.php'; 

use PHPUnit\Framework\TestCase;

// ! Cara run php test: vendor/bin/phpunit test/TestHitungHuruf.php

class TestHitungHuruf extends TestCase {
    public function testHitungHurufKalimatKosong() {
        $hasil = hitung_huruf('');
        $this->assertEquals(0, $hasil, 'Test case 1: Kalimat kosong');
    }

    public function testHitungHurufSatuKata() {
        $hasil = hitung_huruf('Halo');
        $this->assertEquals(4, $hasil, 'Test case 2: Satu kata');
    }

    public function testHitungHurufBeberapaKata() {
        $hasil = hitung_huruf('Halo saya BLUG');
        $this->assertEquals(12, $hasil, 'Test case 3: Beberapa kata');
    }

    public function testHitungHurufDenganSpasiGanda() {
        $hasil = hitung_huruf('Halo  saya  BLUG');
        $this->assertEquals(12, $hasil, 'Test case 4: Spasi ganda');
    }
}
?>
