<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Order;

class OrderTest extends TestCase {
    public function testAddItemUpdatesTotal() {
        $order = new Order();
        $order->addItem(10.5);
        $order->addItem(5.5);
        $this->assertEquals(16.0, $order->getTotal());
    }

    public function testResetClearsTotal() {
        $order = new Order();
        $order->addItem(100);
        $order->reset();
        $this->assertEquals(0, $order->getTotal());
    }
}
