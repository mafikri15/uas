<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pemesanan', 'Pemesanan::index');
$routes->get('/add_data_pemesanan', 'Pemesanan::add_data_pemesanan');
$routes->post('/proses_data_pemesanan', 'Pemesanan::proses_data_pemesanan');
// Halaman Tambah
$routes->get('pemesanan/tambah', 'Pemesanan::tambah');
// Halaman Edit
$routes->get('pemesanan/edit/(:any)', 'Pemesanan::edit/$1');
// Proses CRUD
// Insert
$routes->post('pemesanan/add', 'Pemesanan::add');
// Update
$routes->post('pemesanan/update', 'Pemesanan::update');
// Hapus
$routes->get('pemesanan/hapus/(:any)', 'Pemesanan::hapus/$1');
//$routes->get('maskapai', 'Maskapai::maskapai');
$routes->setAutoRoute(true);