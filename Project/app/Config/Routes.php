<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->get('logout', 'Login::logout');
$routes->match(['get', 'post'], 'register', 'Login::register');
$routes->get('/html', 'Materi::index', ['filter' => 'auth']);
$routes->get('/cpp', 'Materi::cpp', ['filter' => 'auth']);
$routes->add('vidio/(:any)', 'Materi::vidio/$1');
$routes->add('delete/(:any)', 'Materi::delete/$1');
$routes->add('update', 'Materi::update');
$routes->add('edit/(:any)', 'Materi::edit/$1');
$routes->add('input', 'Materi::create');
$routes->add('store', 'Materi::store');
$routes->add('profil/(:any)', 'Pengguna::profil/$1');
$routes->add('edit_profil/(:any)', 'Pengguna::edit/$1');
$routes->add('update_profil', 'Pengguna::update');
$routes->add('/aboutus', 'Home::about');

/**
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
