<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\ColorController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('products', ProductController::class);
    $router->resource('sets', SetController::class);
    $router->resource('orders', OrderPaymentController::class);
    
});

Route::get('/admin/color', [ColorController::class, 'color']);

