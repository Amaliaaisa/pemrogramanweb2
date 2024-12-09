<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/search', 'Home::seach');
$routes->get('/chart', 'Home::cart');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/submit', 'Home::submit');


// Admin
$routes->group('admin', function($routes){
    $routes->get('/dashboard', 'AdminController::dashboard');
    $routes->get('/daftar-buku', 'AdminController::daftarBuku');
    $routes->get('/transaksi', 'AdminController::transaksi');
    $routes->get('/pelanggan', 'AdminController::pelanggan');

});