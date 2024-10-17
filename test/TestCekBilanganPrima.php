<?php
require 'question/CekBilanganPrima.php'; 

use PHPUnit\Framework\TestCase;

// ! Cara run php test: vendor/bin/phpunit test/TestCekBilanganPrima.php

class TestCekBilanganPrima extends TestCase {
    public function testBilanganPrimaKecil() {
        $hasil = cek_bilangan_prima(7);
        $this->assertTrue($hasil, 'Test case 1: 7 adalah bilangan prima');
    }

    public function testBilanganBukanPrima() {
        $hasil = cek_bilangan_prima(4);
        $this->assertFalse($hasil, 'Test case 2: 4 bukan bilangan prima');
    }

    public function testBilanganSatu() {
        $hasil = cek_bilangan_prima(1);
        $this->assertFalse($hasil, 'Test case 3: 1 bukan bilangan prima');
    }

    public function testBilanganNegatif() {
        $hasil = cek_bilangan_prima(-7);
        $this->assertFalse($hasil, 'Test case 4: Bilangan negatif bukan bilangan prima');
    }
}
?>
