<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

$routes->get('/', 'admin\adminFunction::index');

$routes->get('/tambah', 'admin\adminFunction::tambah');
$routes->post('/simpan', 'admin\adminFunction::simpan');
$routes->delete('/hapus/(:num)', 'admin\adminFunction::hapus/$1');
$routes->get('/edit/(:num)', 'admin\adminFunction::edit/$1');
$routes->post('/update/(:num)', 'admin\adminFunction::update/$1');
//jabatan
$routes->get('/listJabatan', 'admin\jabatanFunction::list_jabatan');
$routes->get('/tambahJabatan', 'admin\jabatanFunction::tambah');
$routes->post('/simpan_jabatan', 'admin\jabatanFunction::simpan');
$routes->delete('/hapus_jabatan/(:num)', 'admin\jabatanFunction::hapus/$1');
$routes->get('/edit_jabatan/(:num)', 'admin\jabatanFunction::edit/$1');
$routes->post('/update_jabatan/(:num)', 'admin\jabatanFunction::update/$1');
//bidang
$routes->get('/listBidang', 'admin\bidangFunction::list_bidang');
$routes->get('/tambahBidang', 'admin\bidangFunction::tambah');
$routes->post('/simpan_bidang', 'admin\bidangFunction::simpan');
$routes->delete('/hapus_bidang/(:num)', 'admin\bidangFunction::hapus/$1');
$routes->get('/edit_bidang/(:num)', 'admin\bidangFunction::edit/$1');
$routes->post('/update_bidang/(:num)', 'admin\bidangFunction::update/$1');
//prodi
$routes->get('/listProdi', 'admin\prodiFunction::list_prodi');
$routes->get('/tambahProdi', 'admin\prodiFunction::tambah');
$routes->post('/simpan_prodi', 'admin\prodiFunction::simpan');
$routes->delete('/hapus_prodi/(:num)', 'admin\prodiFunction::hapus/$1');
$routes->get('/edit_prodi/(:num)', 'admin\prodiFunction::edit/$1');
$routes->post('/update_prodi/(:num)', 'admin\prodiFunction::update/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
