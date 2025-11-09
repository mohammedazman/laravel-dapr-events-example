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

Route::get('test/invoke', function () {


    $result = \AlazziAz\LaravelDaprInvoker\Facades\DaprInvoke::get(
        appId: 'consumer',
        method: 'api/invoked-route',
        query: [
            'sampleParam' => 'sampleValue',
        ],
    );

//    $result  = $promise->wait();
    dd($result);

    return response()->json([
        'status' => 'Invocation Successful',
        'response' => $result,
//        'state'=> $promise->getState(),
    ]);
});
