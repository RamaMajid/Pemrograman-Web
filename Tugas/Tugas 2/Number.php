<?php

class NumberPrinter {
    private $n;

    public function __construct($n) {
        $this->n = $n;
    }

    public function printNumbers() {
        for ($i = 1; $i <= $this->n; $i++) {
            if ($i % 4 == 0 && $i % 6 == 0) {
                echo "Pemrograman Website 2024\n";
            } elseif ($i % 5 == 0) {
                echo "2024\n";
            } elseif ($i % 4 == 0) {
                echo "Pemrograman\n";
            } elseif ($i % 6 == 0) {
                echo "Website\n";
            } else {
                echo "$i\n";
            }
        }
    }
}

$n = 30; // Ganti sesuai nilai yang diinginkan
$numberPrinter = new NumberPrinter($n);
$numberPrinter->printNumbers();
