<?php
require 'question/DeretFibonacci.php'; 

use PHPUnit\Framework\TestCase;

// ! Cara run php test: vendor/bin/phpunit test/TestDeretFibonacci.php 

class testDeretFibonacci extends TestCase {
    public function testDeretFibonacciSepuluh() {
        $hasil = deret_fibonacci(10);
        $this->assertEquals([0, 1, 1, 2, 3, 5, 8, 13, 21, 34], $hasil, 'Test case 1: Deret Fibonacci dengan 10 angka');
    }

    public function testDeretFibonacciLima() {
        $hasil = deret_fibonacci(5);
        $this->assertEquals([0, 1, 1, 2, 3], $hasil, 'Test case 2: Deret Fibonacci dengan 5 angka');
    }

}
?>
