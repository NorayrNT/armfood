<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('abouts', AboutController::class);
    $router->resource('ads', AdController::class);
    $router->resource('armenia', ArmeniaController::class);
    $router->resource('bags', BagController::class);
    $router->resource('contacts', ContactController::class);
    $router->resource('orders', OrderController::class);
    $router->resource('order-details', OrderDetailController::class);
    $router->resource('pages', PageController::class);
    $router->resource('partners', PartnerController::class);
    $router->resource('products', ProductController::class);
    $router->resource('social-links', SocialLinkController::class);
    $router->resource('terms', TermController::class);
    $router->resource('types', TypeController::class);
    $router->resource('users', UserController::class);
    $router->resource('wishlists', WishlistController::class);
});
