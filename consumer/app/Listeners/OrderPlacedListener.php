<?php

namespace App\Listeners;

use App\Events\OrderPlaced;

class OrderPlacedListener
{
    public function handle(OrderPlaced $event): void
    {
      logger()->info("OrderPlacedListener handled order ID: {$event->orderId}");
    }
}
