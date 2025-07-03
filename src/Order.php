<?php
namespace App;

class Order {
    private float $total = 0;

    public function addItem(float $price) {
        $this->total += $price;
    }

    public function getTotal(): float {
        return $this->total;
    }

    public function reset() {
        $this->total = 0;
    }
}
