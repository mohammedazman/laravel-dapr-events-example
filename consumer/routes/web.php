<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $app = \Dapr\App::create(configure: fn(\DI\ContainerBuilder $builder) => $builder->addDefinitions('config.php'));


    return view('welcome');
});

