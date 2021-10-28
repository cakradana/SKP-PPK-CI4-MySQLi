<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// route login
$routes->get('/', 'Login::index');

// route admin
$routes->add('/admin', 'Admin\Dashboard::index');

// navbar
$routes->add('/admin/pangkat', 'Admin\Pangkat::index');
$routes->add('/admin/jabatan', 'Admin\Jabatan::index');
$routes->add('/admin/tingkat', 'Admin\Tingkat::index');
$routes->add('/admin/pegawai', 'Admin\Pegawai::index');

// save
$routes->add('/pangkat/save', 'Admin\Pangkat::save');
$routes->add('/jabatan/save', 'Admin\Jabatan::save');
$routes->add('/tingkat/save', 'Admin\Tingkat::save');
$routes->add('/pegawai/save', 'Admin\Pegawai::save');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
