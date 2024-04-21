<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contoh1', 'Contoh1::index');
$routes->get('/latihan1', 'Latihan1::index');
$routes->get('/latihan1/penjumlahan/(:num)/(:num)', 'Latihan1::penjumlahan/$1/$2');
$routes->get('matakuliah', 'Matakuliah::index');
$routes->post('matakuliah/cetak', 'Matakuliah::cetak');
$routes->get('/web', 'Web::index');
$routes->get('/web/about', 'Web::about');


