<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('invoked-route', function (Request $request) {
    return response()->json([
        'message' => 'Invoked route reached successfully',
        'data' => $request->query()??'no query parameters',
    ]);
});

