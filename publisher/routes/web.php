<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test/publish', function () {
    dapr_publish(new \App\Events\OrderPlaced(
        orderId: 1234,
        amountCents: 25075,
        currency: 'USD',
    ));

    return 'Event Published!';
});
