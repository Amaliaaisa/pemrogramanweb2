<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//public
$routes->get('/', 'Home::index');
$routes->get('/search', 'Home::seach');
$routes->get('/cart', 'Home::cart');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/submit', 'Home::submit');
$routes->get('/images/(:segment)', 'Home::images');

service('auth')->routes($routes);


// Admin
$routes->group('admin', ['filter' => ['group:admin']], function($routes){
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->post('daftar-buku', 'AdminController::createbuku');
    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('pelanggan', 'AdminController::pelanggan');

});